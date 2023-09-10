<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    //
   
    public function index()
    {  
        $proyectos = Project::latest()->get();
        return view('proyecto.proyecto',['proyectos' => $proyectos]);
    }
}
