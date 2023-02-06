<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    
    protected $table = 'jobs';
    protected $fillable = ['user_id', 'order_id', 'title', 'slug', 'category_id', 'platform_id', 'genre_id', 'video_size', 'job_brief', 'job_status', 'job_media_1', 'job_media_2', 'job_media_3', 'job_media_4', 'job_media_5', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}