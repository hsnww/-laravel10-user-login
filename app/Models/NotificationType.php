<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    use HasFactory;

//    public function userNotifications()
//    {
//        return $this->hasMany(UserNotification::class);
//    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
