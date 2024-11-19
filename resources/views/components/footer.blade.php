@php
    $isWelcomePage = Route::currentRouteName() === 'welcome';
@endphp
<footer class="uk-section uk-section-secondary uk-light uk-margin-large-top">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-divider uk-child-width-1-3@s uk-text-center" uk-grid>
            <div>
                <h3 class="uk-heading-small">LOGO</h3>
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
                <li><a href="{{ route('welcome') }}">INICIO</a></li>
                <li><a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll>SOBRE NOSOTROS</a></li>
                <li><a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll>SERVICIOS</a></li>
                <li><a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll>PROYECTOS</a></li>
                <li><a href="#contacto" uk-scroll>CONTACTO</a></li>
            </ul>
        </div>
        
        <hr>

        <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
            <small class="uk-h6">© Construcción y Remodelación LG. 2024</small>
             <!-- Redes Sociales -->
            <div class="uk-text-center uk-margin-top uk-margin-medium-bottom">
                <ul class="uk-subnav uk-flex-center uk-margin-remove">
                    <li><a href="#" target="_blank" uk-icon="icon: facebook" class="social-icon"></a></li>
                    <li><a href="#" target="_blank" uk-icon="icon: instagram" class="social-icon"></a></li>
                    <li><a href="#" target="_blank" uk-icon="icon: whatsapp" class="social-icon"></a></li>
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
