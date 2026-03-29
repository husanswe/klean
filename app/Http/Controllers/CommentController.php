<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{
    use AuthorizesRequests;
    
    public function store(Request $request) {
        $comment = Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }

    public function update(Request $request, Comment $comment) {
        $this->authorize('update', $comment);
        $comment->update(['body' => $request->body]);
        return redirect()->back();
    }

    public function destroy(Request $request, Comment $comment) {
        $this->authorize('delete', $comment);
        $comment->delete();
        return redirect()->back();
    }

}
