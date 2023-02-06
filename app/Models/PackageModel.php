<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    
    protected $table = 'packages';
    protected $fillable = ['id', 'user_id', 'category_id', 'package_name', 'package_slug', 'no_of_videos', 'no_of_videos_received', 'timeline', 'price', 'payout', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}