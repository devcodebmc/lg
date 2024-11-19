<section class="projects-section" id="proyectos">
    <div class="projects-header">
        <p class="projects-subtitle">Colección de Trabajo</p>
        <h2 class="projects-title">Nuestros Proyectos</h2>
    </div>

    <div class="uk-section uk-section-default projects-section">
        <div class="uk-container">
            <!-- Contenedor de cuadrícula para los proyectos -->
            <div class="projects-grid">
                
                <!-- Proyecto 1 (imagen principal) -->
                <div class="project project-main">
                    <a href="{{ route('proyects') }}">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="{{ asset('images/miki.jpg') }}" alt="Origen Pedregal">
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <p class="uk-h4">Pintura en fachada óptica MIKITA CDMX</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Proyecto 2 -->
                <div class="project">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('images/malone.jpg') }}" alt="Residencia Rincón">
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4">Jo Malone y Lamer perfumería Liverpool insurgentes CDMX</p>
                        </div>
                    </div>
                </div>

                 <!-- Proyecto 3 -->
                 <div class="project">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('images/arqui.jpg') }}" alt="Residencia Rincón">
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4">Arquidiócesis de la CDMX 4o piso</p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="project">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('images/pola.jpg') }}" alt="Residencia Rincón">
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4">Tapial C.Dior Liverpool Polanco cdmx</p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5 -->
                <div class="project">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('images/cuart.jpg') }}" alt="Residencia Rincón">
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4">Sysley Perfumería, Santa Fe CDMX</p>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 6 -->
                <div class="project">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="{{ asset('images/pla.jpg') }}" alt="Residencia Rincón">
                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4">Plafón Carolina Herrera ph perisur cdmx</p>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </div>
</section>
