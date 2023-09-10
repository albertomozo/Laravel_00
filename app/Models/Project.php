<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Project extends Model
{
    //protected $fillable = ['title','description'];
     protected $fillable = ['title','url','description'];
    // protected $guarded =['secret'];
    
    //use HasFactory;
    /* ejemplo 02 rutas amigables */
    public function getRouteKeyName()
    {
        return 'url';
    } 
     /* fin ejemplo 02 rutas amigables */

}


