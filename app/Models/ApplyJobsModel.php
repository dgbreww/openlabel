<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyJobsModel extends Model
{
    
    protected $table = 'apply_jobs';
    protected $fillable = ['user_id', 'job_id', 'job_status', 'video_link', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}