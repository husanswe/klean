<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change_locale($locale)
    {
        if (! in_array($locale, ['en', 'ru', 'uz'])) {
            abort(400);
        }

        Session::put('locale', $locale);
        
        return redirect()->back();
    }
}
