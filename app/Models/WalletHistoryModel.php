<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletHistoryModel extends Model
{
    
    protected $table = 'wallet_history';
    protected $fillable = ['id', 'user_id', 'transaction_type', 'amount', 'comment', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}