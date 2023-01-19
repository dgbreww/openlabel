<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformModel extends Model
{
    
    protected $table = 'platform';
    protected $fillable = ['platform_name', 'platform_slug', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}