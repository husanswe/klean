<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function() {
    $userCount = User::count();
    $postCount = Post::count();
    $commentCount = Comment::count();
    
    Log::info("Counting how many new users, posts and comments created");
})->everyMinute();