<div class="uk-text-center uk-margin-large-top uk-padding" id="contacto">
    <h2 class="contact-heading">Contáctanos</h2>

    <div class="uk-flex uk-flex-center">
        <form action="{{ route('contact.send') }}" method="POST" class="uk-grid-small uk-grid-match uk-width-2-3@s" uk-grid>
            @csrf
            <div class="uk-width-1-2@s">
                <input class="uk-input uk-form-large custom-input" name="nombre" type="text" placeholder="Nombre">
                @error('nombre')
                    <span class="uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
         
            <div class="uk-width-1-2@s">
                <input class="uk-input uk-form-large custom-input" name="apellido" type="text" placeholder="Apellido">
                @error('apellido')
                    <span class="uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input uk-form-large custom-input" name="telefono" type="text" placeholder="Teléfono">
                @error('telefono')
                    <span class="uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input uk-form-large custom-input" name="correo" type="email" placeholder="Correo">
                @error('correo')
                    <span class="uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-width-1-1">
                <textarea class="uk-textarea uk-form-large custom-textarea" name="mensaje" rows="5" placeholder="Tu mensaje aquí..."></textarea>
                @error('mensaje')
                    <span class="uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-width-1-1">
                <button class="uk-button uk-button-primary custom-button">Enviar</button>
            </div>
        </form>        
    </div>
</div>
