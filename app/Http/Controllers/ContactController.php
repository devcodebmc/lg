<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            // Enviar el correo
            Mail::to('manzanocortesbrayan@gmail.com')->send(new ContactFormMail($data));

            // Regresar un mensaje satisfactorio a la vista
            return redirect()->back()->with('success', '¡Gracias por contactarnos! Tu mensaje ha sido enviado. En breve nos comunicaremos contigo!');
        } catch (\Exception $e) {
            // Manejar errores de envío
            return redirect()->back()->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.');
        }
    }
}
