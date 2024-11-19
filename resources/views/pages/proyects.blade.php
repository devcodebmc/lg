@extends('layouts.main')

@section('title', '| proyectos')
@section('content')

<div class="uk-grid-divider uk-grid-small uk-child-width-1-3@m uk-grid uk-padding" uk-grid>
    <!-- Columna izquierda: Información General -->
    <div>
        <h3 class="uk-heading-bullet uk-text-base">Información General</h3>
        <ul class="uk-list uk-list-divider">
            <li><span uk-icon="location" class="uk-text-base-brown"></span>
                <strong>Ubicación:</strong> Periférico Sur #4271, Fuentes del Pedregal, CDMX
            </li>
            <li><span uk-icon="user" class="uk-text-base-brown"></span>
                <strong>Arquitecto:</strong> Sordo Madaleno
            </li>
            <li><span uk-icon="home" class="uk-text-base-brown"></span>
                <strong>Tipo de Proyecto:</strong> Residencia Vertical
            </li>
            <li><span uk-icon="calendar" class="uk-text-base-brown"></span>
                <strong>Fecha de Entrega:</strong>
                <ul class="uk-list">
                    <li>Torre A: 2021 - Concluido</li>
                    <li>Torre B: 2021</li>
                </ul>
            </li>
            <li><span uk-icon="thumbnails" class="uk-text-base-brown"></span>
                <strong>Acabados y Sistemas Instalados:</strong>
                <ul class="uk-list lg-list">
                    <li>
                        <span uk-icon="chevron-double-right"></span> 
                        Plafón WPC en terrazas.
                    </li>
                    <li>
                        <span uk-icon="chevron-double-right"></span> 
                        Plafón WPC en pasillos de comunicación.
                    </li>
                    <li>
                        <span uk-icon="chevron-double-right"></span> 
                        WPC amenities.
                    </li>
                    <li>
                        <span uk-icon="chevron-double-right"></span> 
                        Panel de aluminio ACP en terrazas.
                    </li>
                    <li>
                        <span uk-icon="chevron-double-right"></span> 
                        Recubrimiento STO Therm EIFS.
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Columna derecha: Contenido Principal -->
    <div class="uk-width-expand">
        <h1 class="uk-heading-small uk-text-base">Pintura en fachada óptica MIKITA CDMX</h1>
        <p>Origen Pedregal, ubicado en la mejor zona del sur de la Ciudad de México, desarrollo de vivienda constituido por dos torres de 34 niveles.</p>

        <!-- Video embebido -->
        <div class="uk-margin">
            <iframe src="https://player.vimeo.com/video/123456789" width="100%" height="350" frameborder="0" allowfullscreen></iframe>
        </div>

        <!-- Botones -->
        <div class="uk-button-group uk-flex uk-flex-center">
            <a href="#gallery" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">Galería</a>
            <a href="#process" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">Proceso</a>
            <a href="#more-proyects" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">+Proyectos</a>
        </div>
    </div>
</div>

@include('components.gallery')
@include('components.process')
@include('components.slideProyects')
@include('components.contactForm')


@endsection
