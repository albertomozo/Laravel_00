<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationControler extends Controller
{
    public function index($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }//
}
