<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterModel extends Model
{
    
    protected $table = 'newsletter';
    protected $fillable = ['id', 'email', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}