<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\LikeNotification;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(){
        $user = User::find(4);
        $like = ["content" => $user->name . " ". "was like your post",
                "user_id" => $user->id ,
    ];
    $user->notify(new LikeNotification($like));
    // dd($user->notifications[0]->markAsRead());
    // dd($user->unreadNotifications);
    }
}
