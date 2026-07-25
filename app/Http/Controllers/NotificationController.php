<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function read(int $id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        return redirect()->route('posts.show', $notification->data['post_id']);
    }

    public function readAll()
    {
        auth()->user()->unreadNotifications->markAllAsRead();

        return back();
    }
}
