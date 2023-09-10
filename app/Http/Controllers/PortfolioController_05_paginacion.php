<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    //
   
    public function index()
    {  
        $proyectos = Project::orderby('created_at','DESC')->paginate(4);
        return view('proyecto.proyecto',['proyectos' => $proyectos]);
    }
}
