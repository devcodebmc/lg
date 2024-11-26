<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondaryImage;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class SecondaryImageController extends Controller
{
    public function index($project)
    {
        $secondaryImages = SecondaryImage::where('project_id', $project)->get();

        // Obtener un solo proyecto
        $project = Project::select('title','proceedings')->where('id', $project)->first();

        // Decodificar 'proceedings' si no está vacío
        $proceedings = $project ? $project->proceedings : [];

        return view('backend.secondary_images.index', compact('secondaryImages', 'project', 'proceedings'));
    }

    public function update(Request $request, $id){
        // Validar que los proceedings sean un arreglo o nulos
        $validatedData = $request->validate([
            'proceedings' => 'nullable|array',
        ]);

        try {
            // Buscar la imagen secundaria
            $secondaryImage = SecondaryImage::findOrFail($id);

            // Actualizar el campo proceedings (se guarda como JSON)
            $secondaryImage->category = $validatedData['proceedings'] ?? [];

            // Guardar los cambios
            $secondaryImage->save();

            return redirect()->back()->with('success', 'Procesos de instalación actualizados correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar los procesos: ' . $e->getMessage());
        }
    }

    public function destroy($project){
        // Eliminar la imagen secundaria asociada al proyecto
       $secondaryImage = SecondaryImage::findOrFail($project);
       // Eliminar la  imagen de la carpeta public 
       if (Storage::disk('public')->exists($secondaryImage->image_path)) {
            Storage::disk('public')->delete($secondaryImage->image_path);
        }
        // Eliminar la imagen secundaria en la base de datos
        $secondaryImage->delete();

        return redirect()->back()->with('success', 'Imagen secundaria eliminada correctamente.');
    }

}
