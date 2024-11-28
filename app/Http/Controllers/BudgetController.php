<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BudgetMail;
use App\Models\Budget;

class BudgetController extends Controller
{
    
    public function index(){
        $budgets = Budget::latest()->get(); // Ordena por fecha de creación más reciente
        return view('backend.budgets.index', compact('budgets'));
    }
    public function send(Request $request)
    {
        // Validar los datos del formulario
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'servicio' => 'required|string|max:50',
            'area' => 'required|numeric|min:0',
            'materiales' => 'nullable|string|max:1000',
            'presupuesto' => 'nullable|numeric|min:0',
            'mensaje' => 'nullable|string|max:1000',
        ]);

        try {
            // Enviar el correo
            Mail::to('manzanocortesbrayan@gmail.com')->send(new BudgetMail($data));

            // Crear un nuevo presupuesto en la base de datos
            $budget = new Budget();
            $budget->name = $data['nombre'];
            $budget->email = $data['correo'];
            $budget->phone = $data['telefono'];
            $budget->service_type = $data['servicio'];
            $budget->area = $data['area'];
            $budget->material_description = $data['materiales'];
            $budget->budget = $data['presupuesto'];
            $budget->additional_notes = $data['mensaje'];
            $budget->save();

            // dd($budget);

            // Redirigir con un mensaje satisfactorio
            return redirect()->back()->with('success-cot', '¡Tu cotización ha sido enviada correctamente!');
        } catch (\Exception $e) {
            // Manejar errores de envío
            return redirect()->back()->with('error-cot', 'Hubo un problema al enviar tu cotización. Intenta de nuevo más tarde.');
        }
    }
}
