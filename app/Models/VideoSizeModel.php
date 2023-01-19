<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSizeModel extends Model
{
    
    protected $table = 'video_size';
    protected $fillable = ['video_width', 'video_height', 'video_slug', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}