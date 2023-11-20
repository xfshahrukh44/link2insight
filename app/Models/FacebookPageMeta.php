<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookPageMeta extends Model
{
    protected $fillable = [
        'facebook_page_id',
        'key',
        'value',
    ];

    public function facebook_page ()
    {
        return $this->belongsTo(FacebookPage::class);
    }
}
