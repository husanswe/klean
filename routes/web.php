<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\CommentController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

    Route::get('main', [PageController::class, 'main'])->name('main');
    Route::get('about', [PageController::class, 'about'])->name('about');
    Route::get('service', [PageController::class, 'service'])->name('service');
    Route::get('project', [PageController::class, 'project'])->name('project');
    Route::get('contact', [PageController::class, 'contact'])->name('contact');

    Route::get('login', [AuthController::class, 'login'])->name('login');


    Route::resources([
        'posts' => PostController::class,
        'comments' => CommentController::class,
        'users' => UserController::class,     
    ]);

?>