<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    
    protected $table = 'users';
    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'password', 'profile_picture', 'token', 'user_type', 'provider_type', 'verified', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}