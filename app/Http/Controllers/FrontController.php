<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class FrontController extends Controller
{
    public function index(){
        $projects = Project::latest()->get(); // Ordena por fecha de creación más reciente
        return view('welcome', compact('projects'));
    }

    public function show($slug){
        // Buscar el proyecto por el slug
        $project = Project::where('slug', $slug)->firstOrFail();

        $project->each(function (Project $project ) {
            // Relaciones con otros modelos
            $project->secondaryImages;
        });


        // Buscar los proyectos diferentes al proyecto por el slug
        $relatedProjects = Project::where('slug', '!=', $slug)->take(4)->get();

        // Retornar la vista con el proyecto encontrado
        return view('pages.proyects', compact('project', 'relatedProjects'));
    }
}
