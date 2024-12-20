@php
    $isWelcomePage = Route::currentRouteName() === 'welcome';
@endphp
<footer class="uk-section uk-section-secondary uk-light uk-margin-large-top">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-divider uk-text-center uk-child-width-1-3@s" 
            uk-grid
            style="align-items: center;">
            <div>
                <img src="{{ asset('images/lg-logo-x-border.png') }}" 
                    class="uk-border-circle lg-logo-footer " 
                    alt="Logo Construcción y Remodelación Lg">
            </div>
            <div class="uk-flex uk-flex-column uk-flex-middle">
                <div class="uk-flex uk-flex-middle lg-tel">
                    <span uk-icon="icon: receiver; ratio: 1.2" class="uk-margin-small-right"></span>
                    <a href="tel:+525515659700" style="text-decoration: none;">
                        <span>+52 55 1565 9700</span>
                    </a>
                </div>
                <div class="uk-flex uk-flex-middle uk-margin-small-top lg-mail">
                    <span uk-icon="icon: mail; ratio: 1.2" class="uk-margin-small-right"></span>
                    <a href="mailto:"></a>
                    <span>ventas@construccionyremodelacionlg</span>
                </div>
            </div>
            <div class="uk-text-center">
                <a href="#presupuesto" uk-toggle class="uk-button uk-border-pill lg-btn-pre">PRESUPUESTO</a>
            </div>
        </div>
        
        <div class="uk-text-center uk-margin-top">
           
            <ul class="uk-subnav uk-subnav-divider uk-flex-center">
                <li>
                    <a href="{{ route('welcome') }}">INICIO</a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll>SOBRE NOSOTROS</a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll>SERVICIOS</a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll>PROYECTOS</a>
                </li>
                <li>
                    <a href="#contacto" uk-scroll>CONTACTO</a>
                </li>
            </ul>
        </div>
        
        <hr>

        <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
            <small class="uk-h6">© Construcción y Remodelación LG. 2024</small>
             <!-- Redes Sociales -->
            <div class="uk-text-center uk-margin-top uk-margin-medium-bottom">
                <ul class="uk-subnav uk-flex-center uk-margin-remove">
                    <li>
                        <a href="https://www.facebook.com/construccionyremodelacionlg" target="_blank" uk-icon="icon: facebook" class="social-icon"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/construccion_remodelacionlg/" target="_blank" uk-icon="icon: instagram" class="social-icon"></a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=525515659700&amp;text=Hola, los contacto de la página: construccionyremodelacionlg.com, solicito la atención de un asesor, por favor." target="_blank" uk-icon="icon: whatsapp" class="social-icon"></a>
                    </li>
                </ul>
            </div>
            <p class="lg-copy">
                © 2024. Hecho con 💚
                <a class="uk-link-reset" href="https://www.bydsolutions.com" target="_blank" rel="noopener noreferrer" style="color: #7381df !important">
                    ByD Solutions
                </a> 
                💻 Todos los derechos reservados 
            </p>
        </div>
    </div>
</footer>
