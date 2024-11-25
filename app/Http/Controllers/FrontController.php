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

        // Retornar la vista con el proyecto encontrado
        return view('pages.proyects', compact('project'));
    }
}
