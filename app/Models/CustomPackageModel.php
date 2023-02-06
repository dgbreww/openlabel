<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomPackageModel extends Model
{
    
    protected $table = 'custom_package';
    protected $fillable = ['id', 'user_id', 'category_id', 'no_of_videos', 'no_of_videos_received', 'timeline', 'requirements', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}