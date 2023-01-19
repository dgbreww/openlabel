<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreModel extends Model
{
    
    protected $table = 'genre';
    protected $fillable = ['id', 'genre_name', 'genre_slug', 'is_active', 'display_order', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}