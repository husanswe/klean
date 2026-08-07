<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function main() 
    {
        try {
                $response = Http::timeout(5)->get('https://zenquotes.io/api/random');
                $quote = $response->json();
            } catch (\Exception $e) {
                $quote = null;
            }   

        return view('main')->with('quote', $quote);
    }

    public function about() 
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function project()
    {
        return view('project');
    }

    public function contact()
    {
        return view('contact');
    }
}

?>
