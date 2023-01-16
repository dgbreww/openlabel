<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adminmodel extends Model
{
    
    protected $table = 'admin';
    protected $fillable = ['name', 'email', 'password', 'enable_two_factor', 'profile_picture', 'created_at', 'updated_at'];
    protected $guarded = ['id', 'token'];

}