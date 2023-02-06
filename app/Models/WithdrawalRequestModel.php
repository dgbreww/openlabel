<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithdrawalRequestModel extends Model
{
    
    protected $table = 'withdrawal_request';
    protected $fillable = ['id', 'user_id', 'payment_method', 'status', 'amount', 'remark', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}