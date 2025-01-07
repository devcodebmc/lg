<div class="uk-text-center uk-margin-large-top uk-padding" id="contacto">
    <h2 class="contact-heading">Contáctanos</h2>
    <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid>
        <div>
            <div class="uk-text-right">
                <form action="{{ route('contact.send') }}" method="POST" class="uk-grid-small uk-grid-match uk-width-expand@s" uk-grid>
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
                            <span class="uk-text-danger uk-text-center">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="uk-width-1-1">
                        <button class="uk-button uk-button-primary custom-button">Enviar</button>
                    </div>
                </form>        
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-margin-remove-top uk-margin-remove-bottom uk-padding-remove-bottom uk-padding-remove-top">
                <em class="uk-text-justify" style="color: #c8b48f;">
                    Si deseas contactarnos para solicitar una cotización o para resolver alguna duda, puedes hacerlo a través de los siguientes medios:
                </em>
                <ul class="uk-list uk-list-divider uk-text-left">
                    <li>
                        <span uk-icon="icon: location; ratio: 1.2" style="color: #826363;"></span> 
                        <b>Calle Falsa 123, Colonia Ficticia, Ciudad Ficticia, Estado Ficticio</b>
                    </li>
                    <li>
                        <span uk-icon="icon: mail; ratio: 1.2" style="color: #826363;"></span> 
                        <a href="mailto: info@construccionyremodelacionlg.com" class="uk-link-text">
                           <b>ventas@construccionyremodelacionlg</b> 
                        </a>
                    </li>
                    <li>
                        <span uk-icon="icon: receiver; ratio: 1.2" style="color: #826363;"></span>
                        <b>55 1565 9700</b>
                    </li>
                    <li>
                        <span uk-icon="icon: whatsapp; ratio: 1.2" style="color: #826363;"></span>
                        <a href="https://api.whatsapp.com/send?phone=525515659700&amp;text=Hola, los contacto de la página: construccionyremodelacionlg.com, solicito la atención de un asesor, por favor." target="_blank" class="uk-link-text">
                            <b>55 1565 9700</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
