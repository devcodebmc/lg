<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    // Mostrar todos los proyectos
    public function index(){
        $projects = Project::latest()->get(); // Ordena por fecha de creación más reciente
        return view('backend.projects.index', compact('projects'));
    }

    // Mostrar formulario para crear un proyecto
    public function create(){
        return view('backend.projects.create');
    }

    // Guardar un nuevo proyecto
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'delivery_date' => 'nullable|date',
            'finishes' => 'required|array',
            'proceedings' => 'required|array',
            'cover_image' => 'required|file|image|max:2048',
            'cover_video' => 'nullable|string|max:255',
            'secondary_images.*' => 'nullable|file|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
         // Procesar imagen de portada
        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('projects/images', 'public');
        }

        // Crear el proyecto
        $project = Project::create($validated);

         // Manejar imágenes secundarias
        if ($request->hasFile('secondary_images')) {
            foreach ($request->file('secondary_images') as $image) {
                $path = $image->store('projects/images', 'public');
                
                // Crear registros en la tabla secundaria
                $project->secondaryImages()->create([
                    'image_path' => $path,
                    'category' => $validated['proceedings'],
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Proyecto creado exitosamente.');
    }

    // Mostrar detalles de un proyecto
    public function show(Project $project){
        return view('projects.show', compact('project'));
    }

    // Mostrar formulario para editar un proyecto
    public function edit(Project $project){   
        
        $project->load('secondaryImages'); // Carga las imágenes secundarias relacionadas
        // dd($project);
        return view('backend.projects.edit', compact('project'));
    }


    // Actualizar un proyecto existente
    public function update(Request $request, $id){
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'delivery_date' => 'nullable|date',
            'cover_video' => 'nullable|url',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'secondary_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'finishes' => 'nullable|array',
            'finishes.*' => 'string|max:255',
            'proceedings' => 'nullable|array',
            'proceedings.*' => 'string|max:255',
        ]);

        // Buscar el proyecto por su ID
        $project = Project::findOrFail($id);

        // Actualizar los campos básicos
        $project->title         = $validatedData['title'];
        $project->location      = $validatedData['location'];
        $project->manager       = $validatedData['manager'];
        $project->type          = $validatedData['type'];
        $project->delivery_date = $validatedData['delivery_date'];
        $project->cover_video   = $validatedData['cover_video'];
        $project->description   = $validatedData['description'];
        $project->finishes      = $validatedData['finishes'];
        $project->proceedings   = $validatedData['proceedings'];

        // Manejar la imagen principal
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('projects', 'public');
            $project->cover_image = $coverImagePath;
        }


        // Manejar imágenes secundarias
        if ($request->hasFile('secondary_images')) {
            foreach ($request->file('secondary_images') as $image) {
                $path = $image->store('projects/images', 'public');
                
                // Crear registros en la tabla secundaria
                $project->secondaryImages()->create([
                    'image_path' => $path,
                    'category' => $validatedData['proceedings'], 
                ]);
            }
        }
    

        // Guardar cambios en la base de datos
        $project->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('projects.index', $project->id)
            ->with('success', 'Proyecto actualizado exitosamente.');
    }

    // Eliminar un proyecto
    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
