@extends('layouts.main')

@section('title', "| {$project->title}")

@section('content')

@include('animations.buildloader')

<div class="uk-grid-divider uk-grid-small uk-child-width-1-3@m uk-grid uk-padding" uk-grid>
    <!-- Columna izquierda: Información General -->
    <div>
        <h3 class="uk-text-base">Información General</h3>
        <ul class="uk-list uk-list-divider">
            <li><span uk-icon="location" class="uk-text-base-brown"></span>
                <strong>Ubicación:</strong> {{ $project->location }}
            </li>
            <li><span uk-icon="user" class="uk-text-base-brown"></span>
                <strong>Encargado:</strong> {{ $project->manager }}
            </li>
            <li><span uk-icon="home" class="uk-text-base-brown"></span>
                <strong>Tipo de Proyecto:</strong> {{ $project->type }}
            </li>
            <li><span uk-icon="calendar" class="uk-text-base-brown"></span>
                <strong>Fecha de Entrega:</strong>
                @if ($project->delivery_date)
                    <ul class="uk-list">
                        <li>{{ \Carbon\Carbon::parse($project->delivery_date)->translatedFormat('j \d\e F \d\e Y') }}
                            - {{ $project->delivery_date ? 'Concluido' : 'Pendiente' }}
                        </li>
                    </ul>
                @else
                    <p>No disponible</p>
                @endif
            </li>
            <li><span uk-icon="thumbnails" class="uk-text-base-brown"></span>
                <strong>Acabados y Sistemas Instalados:</strong>
                @if($project->finishes && count($project->finishes) > 0)
                    <ul class="uk-list lg-list">
                        @foreach($project->finishes as $finish)
                            <li>
                                <span uk-icon="chevron-double-right"></span> {{ $finish }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No disponible</p>
                @endif
            </li>
        </ul>
    </div>

    <!-- Columna derecha: Contenido Principal -->
    <div class="uk-width-expand">
        <h1 class="uk-heading-small uk-text-base">{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>

        <!-- Video embebido -->
        @if($project->cover_video)
            <div class="uk-margin">
                <video src="{{ $project->cover_video }}" width="1800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
            </div>
        @endif

        <!-- Botones -->
        <div class="uk-button-group uk-flex uk-flex-center lg-btn-group">
            <a href="#gallery" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">Galería</a>
            <a href="#process" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">Proceso</a>
            <a href="#more-proyects" uk-scroll class="uk-button uk-button-small uk-margin-right uk-button-default uk-border-rounded uk-text-base-brown">+Proyectos</a>
        </div>
    </div>
</div>

<!-- Galería de imágenes secundarias -->
@include('components.gallery', ['project' => $project])

<!-- Proceso -->
@include('components.process', ['project' => $project])

<!-- Proyectos relacionados -->
@include('components.slideProyects', ['relatedProjects' => $relatedProjects])

<!-- Formulario de contacto -->
@include('components.contactForm')

@endsection
