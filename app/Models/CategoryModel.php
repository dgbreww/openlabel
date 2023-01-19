<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    
    protected $table = 'category';
    protected $fillable = ['category_name', 'category_slug', 'category_img', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}