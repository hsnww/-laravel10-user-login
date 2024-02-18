<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NotificationType;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function index(){
        $notifications_types = NotificationType::all();
        return view('admin.notifications.index', compact('notifications_types'));
    }
}
