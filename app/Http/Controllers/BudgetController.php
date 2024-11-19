<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BudgetMail;

class BudgetController extends Controller
{
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

            // Redirigir con un mensaje satisfactorio
            return redirect()->back()->with('success-cot', '¡Tu cotización ha sido enviada correctamente!');
        } catch (\Exception $e) {
            // Manejar errores de envío
            return redirect()->back()->with('error-cot', 'Hubo un problema al enviar tu cotización. Intenta de nuevo más tarde.');
        }
    }
}
