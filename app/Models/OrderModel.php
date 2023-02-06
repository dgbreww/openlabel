<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    
    protected $table = 'orders';
    protected $fillable = ['user_id', 'package_id', 'package_name', 'category_id', 'no_of_videos', 'no_of_videos_received', 'timeline', 'price', 'payout', 'stripe_id', 'balance_transaction_id', 'is_package_used', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}