<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    
    protected $table = 'settings';
    protected $fillable = ['admin_id', 'website_name', 'website_email', 'website_phone', 'website_address', 'admin_logo', 'login_background_img', 'website_logo', 'favicon', 'header_scrips', 'footer_scripts', 'facebook_url', 'twitter_url', 'instagram_url', 'youtube_url', 'linkedin_url', 'mail_from_address', 'mail_from_name', 'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption', 'copyright', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

}