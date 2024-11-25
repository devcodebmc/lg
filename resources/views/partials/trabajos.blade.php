<section class="projects-section" id="proyectos">
    <div class="projects-header">
        <p class="projects-subtitle">Colección de Trabajo</p>
        <h2 class="projects-title">Nuestros Proyectos</h2>
    </div>

    <div class="uk-section uk-section-default projects-section">
        <div class="uk-container">
            <!-- Contenedor de cuadrícula para los proyectos -->
            <div class="projects-grid">
                @foreach ($projects as $project)
                    @if ($loop->first)
                        <!-- Proyecto Principal -->
                        <div class="project project-main">
                            <!-- Enlace a la vista del proyecto específico -->
                            <a href="{{ route('showProject', $project->slug) }}">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <!-- Imagen del proyecto -->
                                    <img src="{{ asset('storage/' . $project->cover_image) }}" 
                                        alt="{{ $project->title }}">
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <!-- Título dinámico del proyecto -->
                                        <p class="uk-h4">{{ $project->title }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <!-- Otros Proyectos -->
                        <div class="project">
                            <!-- Enlace a la vista del proyecto específico -->
                            <a href="{{ route('showProject', $project->slug) }}">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <!-- Imagen del proyecto -->
                                    <img src="{{ asset('storage/' . $project->cover_image) }}" 
                                        alt="{{ $project->title }}">
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <!-- Título dinámico del proyecto -->
                                        <p class="uk-h4">{{ $project->title }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
