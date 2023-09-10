<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    //
   
    public function index()
    {  
        $proyectos = Project::orderby('created_at','DESC')->paginate(2);
        return view('proyecto.proyecto',['proyectos' => $proyectos]);
    }
   
    public function show($id)
    {
          $project = Project::findOrFail($id);
          return view('proyecto.show',['project'=>$project]);
          
    }
    // añadimos el metodo create
    public function create()
    {
        return view('proyecto.create');
    }
}
