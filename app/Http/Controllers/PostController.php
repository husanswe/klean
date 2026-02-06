<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        /* $newPost = new Post;
        $newPost->title = 'new post 4';
        $newPost->short_content = ' new post short content';
        $newPost->content = ' new post content';
        $newPost->photo = '/storage/new_image.png';

        $newPost->save(); */

        /* $newPost = Post::create([
            'title' => '5',
            'short_content' => 'abcdefghi',
            'content' => 'content 123',
            'photo' => 'photo.png',
            'phone' => '998856458'
        ]); */

        $post = Post::find(7)->update(['title' => "123 Changed title"]);
        

        return 'success';

        // return view('posts.index');
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}

?>
