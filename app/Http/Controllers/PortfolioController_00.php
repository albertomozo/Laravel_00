<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
   
    public function index()
    {  
             $porfolios = ['Portfolio 1 ','Portfolio 2 ','Portfolio 3 ','Portfolio 4 ','Portfolio 5 ' ];
            return view('portfolio')->with('porfolios',$porfolios);
    }
}
