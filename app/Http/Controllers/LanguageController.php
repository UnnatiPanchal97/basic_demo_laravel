<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function lang(){
        return view('languages');
    }
    public function changeLang($locale){
        if (! in_array($locale, ['en', 'es'])) {
            abort(404);
        }
        App::setLocale($locale);
        $locale = App::currentLocale();
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
