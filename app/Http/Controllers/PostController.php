<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {   
        /* Post::create([
            'title'         => 'My First Real Post',
            'short_content' => 'Short description here',
            'content'       => 'Full long content...',
            'photo'         => 'photos/example.jpg',
        ]); */


        return view('posts.index');
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
