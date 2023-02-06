<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaveJobsModel extends Model
{
    
    protected $table = 'save_jobs';
    protected $fillable = ['user_id', 'job_id', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}