<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BadgeModel extends Model
{
    
    protected $table = 'badges';
    protected $fillable = ['badge_name', 'badge_slug', 'badge_img', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}