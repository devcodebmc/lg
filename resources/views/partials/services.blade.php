<div class="uk-section uk-section-default service-section" id="servicios">
    <!-- Títulos de la sección -->
    <h2>NUESTROS SERVICIOS</h2>
    <h3>SERVICIOS QUE OFRECEMOS</h3>

    <!-- Contenedor de los servicios en cuadrícula -->
    <div class="uk-container">
        <div class="uk-grid uk-grid-medium uk-child-width-1-3@s uk-text-center" uk-grid>
            <!-- Tarjeta de servicio 1 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/6474343/pexels-photo-6474343.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Drywall">
                    <div class="service-overlay" uk-toggle="target: #modal-drywall">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Drywall</h4>
            </div>

            <!-- Tarjeta de servicio 2 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/1249611/pexels-photo-1249611.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Carpintería Personalizada">
                    <div class="service-overlay" uk-toggle="target: #modal-carpinteria">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Carpintería Personalizada</h4>
            </div>

            <!-- Tarjeta de servicio 3 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/5493677/pexels-photo-5493677.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Instalación Panel De Yeso">
                    <div class="service-overlay" uk-toggle="target: #modal-panelyeso">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Instalación Panel De Yeso</h4>
            </div>

            <!-- Tarjeta de servicio 4 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/7937965/pexels-photo-7937965.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Carpintería Personalizada">
                    <div class="service-overlay" uk-toggle="target: #modal-remodelacion">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Remodelación</h4>
            </div>

            <!-- Tarjeta de servicio 5 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/1669754/pexels-photo-1669754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Pintura">
                    <div class="service-overlay" uk-toggle="target: #modal-pintura">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Pintura</h4>
            </div>

            <!-- Tarjeta de servicio 6 -->
            <div class="service-card">
                <div class="service-image-container">
                    <img src="https://images.pexels.com/photos/257736/pexels-photo-257736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Instalaciones Eléctricas">
                    <div class="service-overlay" uk-toggle="target: #modal-electricidad">
                        <span class="service-plus-icon" uk-icon="plus"></span>
                    </div>
                </div>
                <h4>Instalaciones Eléctricas</h4>
            </div>

        </div>
    </div>
</div>

<!-- Modal Drywall -->
<div id="modal-drywall" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        
        <div class="uk-container uk-padding-large">
            <!-- Encabezado principal -->
            <div class="modal-header uk-text-center">
                <h2 class="service-title">Servicio Drywall</h2>
                <p class="service-subtitle">Creando espacios funcionales y modernos con acabados de calidad.</p>
            </div>
            
            <!-- Contenido del modal organizado en una cuadrícula -->
            <div class="uk-grid-large uk-child-width-1-2@m uk-margin-top" uk-grid>
                
                <!-- Columna de descripción y características -->
                <div>
                    <!-- Sección de descripción -->
                    <div class="modal-section">
                        <h3>¿Qué te ofrecemos?</h3>
                        <p>
                            Nuestro servicio de instalación de drywall incluye un diseño personalizado, instalación profesional y acabados de alta calidad. Nos adaptamos a tus necesidades, creando soluciones eficientes y estéticas para cualquier espacio.
                        </p>
                    </div>

                    <!-- Sección de características -->
                    <div class="modal-section">
                        <h3>Características del servicio</h3>
                        <ul class="uk-list uk-list-bullet">
                            <li>Materiales de alta calidad y durabilidad.</li>
                            <li>Personal capacitado y con experiencia.</li>
                            <li>Instalación rápida y limpia.</li>
                            <li>Adaptación a distintos estilos y diseños.</li>
                            <li>Aislamiento acústico y térmico.</li>
                        </ul>
                    </div>
                </div>

                <!-- Columna de proyectos y contacto -->
                <div>
                    <!-- Sección de proyectos -->
                    <div class="modal-section">
                        <h3>Proyectos destacados</h3>
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match" uk-grid>
                            <!-- Proyecto 1 -->
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                    <div class="uk-card-media-top">
                                        <img src="https://images.pexels.com/photos/6474343/pexels-photo-6474343.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Proyecto 1">
                                    </div>
                                    <div class="uk-card-body">
                                        <h4 class="uk-card-title">Oficina Moderna</h4>
                                        <a href="#" class="uk-button uk-button-text">Ver proyecto</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Proyecto 2 -->
                            <div>
                                <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                                    <div class="uk-card-media-top">
                                        <img src="https://images.pexels.com/photos/1249611/pexels-photo-1249611.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Proyecto 2">
                                    </div>
                                    <div class="uk-card-body">
                                        <h4 class="uk-card-title">Vivienda Residencial</h4>
                                        <a href="#" class="uk-button uk-button-text">Ver proyecto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sección de contacto -->
                    <div class="modal-section">
                        <h3>Contáctanos</h3>
                        <p>
                            <strong>Teléfono:</strong> 
                            <a href="tel:+123456789">+1 234 567 89</a>
                        </p>
                        <p>
                            <strong>Correo electrónico:</strong> 
                            <a href="mailto:info@construccionlg.com">info@construccionlg.com</a>
                        </p>
                        <a href="https://wa.me/123456789" target="_blank" 
                            class="uk-button uk-button-primary uk-width-1-1">
                            <span uk-icon="whatsapp"></span> Hablemos de tu proyecto!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
