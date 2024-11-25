<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondaryImage;
use App\Models\Project;

class SecondaryImageController extends Controller
{
    public function index($project)
    {
        $secondaryImages = SecondaryImage::where('project_id', $project)->get();

        // Obtener un solo proyecto
        $project = Project::select('proceedings')->where('id', $project)->get();

        // Decodificar 'proceedings' si no está vacío
        $proceedings = $project;

        return view('backend.secondary_images.index', compact('secondaryImages', 'proceedings'));
    }
}
