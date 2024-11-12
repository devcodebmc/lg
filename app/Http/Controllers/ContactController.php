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

        // Envía el correo
        Mail::to('manzanocortesbrayan@gmail.com')->send(new ContactFormMail($data));

        // Redirige con un mensaje de éxito
        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
