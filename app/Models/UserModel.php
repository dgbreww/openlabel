<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    
    protected $table = 'users';
    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'password', 'country_code', 'phone_number', 'address', 'tag_line', 'about', 'profile_picture', 'cover_image', 'token', 'user_type', 'provider_type', 'verified', 'account_status', 'expertise', 'wallet_amount', 'stripe_id', 'badge_id', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}