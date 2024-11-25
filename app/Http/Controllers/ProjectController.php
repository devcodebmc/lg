<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    // Mostrar todos los proyectos
    public function index()
    {
        $projects = Project::latest()->get(); // Ordena por fecha de creación más reciente
        return view('backend.projects.index', compact('projects'));
    }

    // Mostrar formulario para crear un proyecto
    public function create()
    {
        return view('backend.projects.createProject');
    }

    // Guardar un nuevo proyecto
    public function store(Request $request)
    {
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
                    'category' => null, // Puedes modificar según sea necesario
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Proyecto creado exitosamente.');
    }

    // Mostrar detalles de un proyecto
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Mostrar formulario para editar un proyecto
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Actualizar un proyecto existente
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'manager' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'delivery_date' => 'nullable|date',
            'finishes' => 'nullable|array',
            'proceedings' => 'nullable|array',
            'cover_image' => 'nullable|file|image|max:2048',
            'cover_video' => 'nullable|string|max:255',
            'secondary_images.*' => 'nullable|file|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        
        // Manejo de archivos
        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('projects/images', 'public');
        }

        if ($request->hasFile('secondary_images')) {
            $secondaryImages = [];
            foreach ($request->file('secondary_images') as $image) {
                $secondaryImages[] = $image->store('projects/images', 'public');
            }
            $validated['secondary_images'] = $secondaryImages;
        }

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    // Eliminar un proyecto
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
