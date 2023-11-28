<?php

namespace App\Http\Controllers;

use App\Models\FacebookPage;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function facebookPages (Request $request)
    {
        $facebook_pages = FacebookPage::all()->map(function ($item) {
            $item->name = $item->latest_meta_value_where_key('name');
            $item->image = $item->latest_meta_value_where_key('image');
            $item->followers = $item->latest_meta_value_where_key('followers');
            $item->likes = $item->latest_meta_value_where_key('likes');
            $item->last_post_at = $item->latest_meta_value_where_key('last_post_at');

            return $item;
        });

        return view('front.facebook', compact('facebook_pages'));
    }

    public function addFacebookPage (Request $request)
    {
        $facebook_page = FacebookPage::create([ 'url' => $request->url ]);

        $response = get_page_info([$facebook_page->url]);

        store_fetched_page_info($response);

        return redirect()->route('facebookPages');
    }

    public function createUser (Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            User::create($request->all());

            return redirect()->back()->with('success', 'User created!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
