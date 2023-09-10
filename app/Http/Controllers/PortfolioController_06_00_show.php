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
    // añadimos el metodo show
    public function show($id)
    {
        //return ($id);
        //return Project::find($id);
        /* ejemplo 03 */
       /*  $project = Project::find($id);
        return view('proyecto.show',['project'=>$project]); */
        /*ejemplo 03 */
          /* ejemplo 04 */
          $project = Project::findOrFail($id);
          return view('proyecto.show',['project'=>$project]);
          /*ejemplo 04 */
    }

}
