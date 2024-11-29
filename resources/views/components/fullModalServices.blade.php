<div id="modal-services" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <!-- Botón para cerrar el modal -->
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        
        <div class="uk-container uk-padding-small">
            <!-- Encabezado principal -->
            <div class="modal-header uk-text-center uk-margin-bottom">
                <h2 class="uk-heading-medium service-title">Servicio Drywall</h2>
                <p class="uk-text-lead service-subtitle">
                    Creando espacios funcionales y modernos con acabados de calidad.
                </p>
            </div>
            
            <!-- Contenido del modal organizado en cuadrícula -->
            <div class="uk-grid-large uk-child-width-1-2@m uk-margin-top" uk-grid>
                
                <!-- Columna: Descripción y características -->
                <div>
                    <!-- Descripción -->
                    <div class="modal-section">
                        <h3 class="uk-heading-line"><span>¿Qué te ofrecemos?</span></h3>
                        <p>
                            Nuestro servicio de instalación de drywall incluye un diseño personalizado, instalación profesional y acabados de alta calidad. Nos adaptamos a tus necesidades, creando soluciones eficientes y estéticas para cualquier espacio.
                        </p>
                    </div>

                    <!-- Características -->
                    <div class="modal-section">
                        <h3 class="uk-heading-line"><span>Características del servicio</span></h3>
                        <ul class="uk-list uk-list-bullet">
                            <li>Materiales de alta calidad y durabilidad.</li>
                            <li>Personal capacitado y con experiencia.</li>
                            <li>Instalación rápida y limpia.</li>
                            <li>Adaptación a distintos estilos y diseños.</li>
                            <li>Aislamiento acústico y térmico.</li>
                        </ul>
                    </div>
                </div>

                <!-- Columna: Proyectos destacados y contacto -->
                <div>
                   <!-- Proyectos destacados -->
                    <div class="modal-section">
                        <h3 class="uk-heading-line"><span>Proyectos destacados</span></h3>
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-match" uk-grid>
                            @foreach ($projects as $key => $project)
                                @if ($key < 2)
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column">
                                            <!-- Imagen del proyecto -->
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}">
                                            </div>

                                            <!-- Contenido del proyecto -->
                                            <div class="uk-card-body uk-flex-1">
                                                <h4 class="uk-card-title uk-margin-small-bottom">{{ $project->title }}</h4>
                                            </div>

                                            <!-- Botón al fondo de la tarjeta -->
                                            <div class="uk-card-footer uk-text-center">
                                                <a href="{{ route('showProject', $project->slug) }}" class="uk-button uk-button-secondary">Ver proyecto</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <!-- Contacto -->
                    <div class="modal-section uk-margin-top">
                        <h3 class="uk-heading-line"><span>Contáctanos</span></h3>
                        <p>
                            <strong>Teléfono:</strong> 
                            <a href="tel:+525515659700" class="uk-link-text">+52 5515659700</a>
                        </p>
                        <p>
                            <strong>Correo electrónico:</strong> 
                            <a href="mailto:info@construccionyremodelacionlg.com" class="uk-link-text">
                                info@construccionyremodelacionlg.com
                            </a>
                        </p>
                        <a href="https://wa.me/+525515659700" target="_blank" 
                            class="uk-button uk-button-primary uk-width-1-1 uk-margin-top">
                            <span uk-icon="whatsapp"></span> Hablemos de tu proyecto!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
