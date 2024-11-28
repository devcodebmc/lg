<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index(){
        $emails = Contact::All();
        return view('backend.emails-received.index', compact('emails'));
    }

    public function send(Request $request){
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

            // Enviar a la base de datos
            $contact = new Contact();
            $contact->name = $data['nombre'];
            $contact->last_name = $data['apellido'];
            $contact->phone_number = $data['telefono'];
            $contact->email = $data['correo'];
            $contact->message = $data['mensaje'];
            $contact->save();

            // Regresar un mensaje satisfactorio a la vista
            return redirect()->back()->with('success', '¡Gracias por contactarnos! Tu mensaje ha sido enviado. En breve nos comunicaremos contigo!');
        } 
        catch (\Exception $e) {
            // Manejar errores de envío
            return redirect()->back()->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.');
        }

    }
}
