<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use App\Models\FacebookPageMeta;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function facebookPages (Request $request)
    {
        $users = User::all();

        $facebook_pages = FacebookPage::whereHas('meta_values')->get()->map(function ($item) {
            $item->name = $item->latest_meta_value_where_key('name');
            $item->image = $item->latest_meta_value_where_key('image');
            $item->followers = $item->latest_meta_value_where_key('followers');
            $item->likes = $item->latest_meta_value_where_key('likes');
            $item->last_post_at = $item->latest_meta_value_where_key('last_post_at');
            $handler_id = $item->latest_meta_value_where_key('handler_id');
            $item->handler_id = $handler_id == 'N/A' ? null : intval($handler_id);
            $item->started_date = [
                Carbon::parse($item->created_at)->format('d'),
                Carbon::parse($item->created_at)->format('M Y'),
            ];
            $item->total_months = [
                Carbon::now()->diff(Carbon::parse($item->created_at))->m,
                Carbon::now()->diff(Carbon::parse($item->created_at))->d,
            ];

            return $item;
        });

        return view('front.facebook', compact('facebook_pages', 'users'));
    }

    public function addFacebookPage (Request $request)
    {
        try {
            DB::beginTransaction();

            if (!$facebook_page = FacebookPage::where('url', $request->url)->first()) {
                $facebook_page = FacebookPage::create([ 'url' => $request->url ]);
            }

            $response = get_page_info([$facebook_page->url]);
            if ($response == [] || !isset($response->data) || !isset($response->data[0])) {
                DB::rollBack();
                return redirect()->route('facebookPages')->with('error', "Couldn't add page.");
            }

            $dummy = clone $response->data[0];
            unset($dummy->url);

            if ($dummy == [] || json_encode($dummy) == '{}') {
                DB::rollBack();
                return redirect()->route('facebookPages')->with('error', "Couldn't add page.");
            }

            store_fetched_page_info($response->data);

            DB::commit();
            return redirect()->route('facebookPages')->with('success', "Page added successfully.");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('facebookPages')->with('error', "Couldn't add page.");
        }
    }

    public function createUser (Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            $data = $request->all();
            $data['password'] = Hash::make($data['password']);

            User::create($data);

            return redirect()->back()->with('success', 'User created!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function refreshData(Request $request)
    {
        try {
            DB::beginTransaction();

            $urls = FacebookPage::query()->pluck('url')->toArray();

            $response = get_page_info($urls);
            if ($response == [] || !$response->data) {
                DB::rollBack();
                return redirect()->route('facebookPages')->with('error', "Couldn't refresh data.");
            }

            store_fetched_page_info($response->data);

            DB::commit();
            return redirect()->route('facebookPages')->with('success', "Refreshed data successfully.");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('facebookPages')->with('error', "Couldn't refresh data.");
        }
    }

    public function updateHandler (Request $request) {
        try {
            $request->validate([
                'facebook_page_id' => 'required',
                'handler_id' => 'required',
            ]);

            DB::beginTransaction();
            FacebookPageMeta::create([
                'facebook_page_id' => $request->facebook_page_id,
                'key' => 'handler_id',
                'value' => strval($request->handler_id),
            ]);

            DB::commit();
            return redirect()->route('facebookPages')->with('success', "Handler updated successfully.");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('facebookPages')->with('error', "Couldn't update handler.");
        }
    }
}
