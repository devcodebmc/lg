@php
    $isWelcomePage = Route::currentRouteName() === 'welcome';
@endphp

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container uk-navbar-transparent lg-navbar" style="background-color: rgba(0, 0, 0, 0.8);" uk-navbar>
        <!-- Navbar Content -->
        <div class="uk-navbar-center">
            <!-- Logo -->
            <a href="{{ route('welcome') }}" class="uk-navbar-item uk-logo">
                <img src="{{ asset('images/lg-logo-rm-bg.png') }}" 
                    alt="Logo Construcción y Remodelación LG"
                    width="50"
                    height="50">
            </a>

            <!-- Navigation Links (visible only on desktop) -->
            <ul class="uk-navbar-nav uk-visible@m">
                <li><a href="{{ $isWelcomePage ? '#' : route('welcome') }}" uk-scroll class="uk-text-bold">INICIO</a></li>
                <li>
                    <a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll class="uk-text-bold">
                        SOBRE NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll class="uk-text-bold">
                        SERVICIOS
                    </a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll class="uk-text-bold">
                        PROYECTOS
                    </a>
                </li>
                <li>
                    <a href="#contacto" uk-scroll class="uk-text-bold">CONTACTO</a>
                </li>
            </ul>

            <!-- Presupuesto Button (visible only on desktop) -->
            <a href="#presupuesto" uk-toggle class="uk-button uk-border-pill uk-text-bold uk-visible@m" style="color: #444; background: #FFFFFF;">PRESUPUESTO</a>

            <!-- Additional Content: Chat and Social Icons -->
            <div class="uk-navbar-item uk-flex uk-flex-middle uk-visible@m">
                <!-- Chat and Phone -->
                <div class="uk-text-left uk-margin-right" style="color: #f0f0f0;">
                    <span uk-icon="icon: commenting; ratio: 1.5" class="uk-margin-small-right"></span>
                    <span class="uk-text-small uk-text-muted">¿Tiene alguna pregunta?</span>
                    <br>
                    <span class="uk-text-small">
                        <strong>Tel.:</strong> 
                        <a href="tel:+525534563072" class="uk-link-text" style="text-decoration: none;">
                            (55) 3456 3072
                        </a>
                    </span>
                </div>
                <!-- Social Icons -->
                <div class="uk-flex uk-flex-middle">
                    <a href="https://www.facebook.com/construccionyremodelacionlg" target="_blank" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="https://www.instagram.com/construccion_remodelacionlg" target="_blank" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=525534563072&amp;text=Hola, los contacto de la página: construccionyremodelacionlg.com, solicito la atención de un asesor, por favor." target="_blank" class="uk-icon-button" uk-icon="whatsapp"></a>
                </div>
            </div>

            <!-- Hamburger Icon for Mobile (hidden on desktop) -->
            <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-nav">
                <span uk-navbar-toggle-icon></span>
            </a>
        </div>
    </nav>
</div>

<!-- Offcanvas Menu for Mobile -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-background-secondary uk-light">
        <!-- Close button -->
        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <!-- Mobile Navigation Links -->
        <ul class="uk-nav uk-nav-default uk-margin-medium-top">
            <li><a href="{{ $isWelcomePage ? '#' : route('welcome') }}" uk-scroll>INICIO</a></li>
            <li><a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll>SOBRE NOSOTROS</a></li>
            <li><a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll>SERVICIOS</a></li>
            <li><a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll>PROYECTOS</a></li>
            <li><a href="#contacto" uk-scroll>CONTACTO</a></li>
        </ul>

        <!-- Mobile Presupuesto Button -->
        <a href="#presupuesto" uk-toggle class="uk-button uk-border-pill uk-text-bold uk-margin-top" style="color: #444; background: #FFFFFF; display: block;">PRESUPUESTO</a>

        <!-- Additional Content: Chat and Social Icons -->
        <div class="uk-margin-large-top uk-text-center">
            <!-- Chat and Phone -->
            <div class="uk-margin-bottom" style="color: #f0f0f0;">
                <span uk-icon="icon: commenting; ratio: 1.5" class="uk-margin-small-right"></span>
                <div class="uk-text-small uk-text-muted">¿Tiene alguna pregunta?</div>
                <div class="uk-text-small">
                    <strong>Tel.:</strong> 
                    <a href="tel:+525534563072" class="uk-link-text" style="text-decoration: none;"> 
                        (55) 1565 9700
                    </a>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="uk-flex uk-flex-center">
                <a href="https://www.facebook.com/construccionyremodelacionlg" target="_blank" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
                <a href="https://www.instagram.com/construccion_remodelacionlg" target="_blank" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
                <a href="https://api.whatsapp.com/send?phone=525534563072&amp;text=Hola, los contacto de la página: construccionyremodelacionlg.com, solicito la atención de un asesor, por favor." target="_blank" class="uk-icon-button" uk-icon="whatsapp"></a>
            </div>
        </div>

        <!-- Logo -->
        <a href="{{ route('welcome') }}" class="uk-text-center">
            <img src="{{ asset('images/lg-logo-rm-bg.png') }}" 
                class="uk-border-rounded uk-align-center uk-margin-large-top" 
                alt="Logo Construcción y Remodelación Lg"
                width="120"
                height="120">
        </a>
    </div>
</div>
