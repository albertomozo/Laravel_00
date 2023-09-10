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
   
    public function show(Project $project)
    {
        $id = $project->id;
        $project = Project::findOrFail($id);
        return view('proyecto.show',['project'=>$project]);
          
    }
    public function create()
    {
        return view('proyecto.create');
    }
    /* añadimos funcion store */
    public function store()
    {
        /*ejemplo 01 */
        //return request();
        /* fin ejemplo 01 */
        /*ejemplo 02 */
 /*        $title = request('title');
        $description = request('description');
        $url = urlencode($title);
        Project::create([
            'title' => $title,
            'description' => $description,
            'url' => $url,
        ]); */
        /* fin ejemplo 02 */
        /*ejemplo 03  forma resumida de ejemplo 02  */
      /*   return Project::create([
            'title' => request('title'),
            'description' => request('description'),
        ]); */
        /* fin ejemplo 03 */
        /*ejemplo 04  abreviando  */
        //return request();
        //return Project::create(request()->all());
        /* fin ejemplo 04 */
        /*ejemplo 04  abreviando  */
        Project::create(request()->all());
        return redirect()->route('portfolio');
        /* fin ejemplo 04 */
    }
}
