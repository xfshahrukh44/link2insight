<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];

    public function meta_values ()
    {
        return $this->hasMany(FacebookPageMeta::class);
    }

    public function latest_meta_value_where_key ($key)
    {
        return $this->hasMany(FacebookPageMeta::class)->where('key', $key)->orderBy('created_at', 'DESC')->first()->value ?? 'N/A';
    }
}
