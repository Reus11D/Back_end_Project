<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLocale;

class MainController extends Controller
{
    public function changeLocale($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);
       return redirect()->back();
    }
}
