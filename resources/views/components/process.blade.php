<div class="uk-container uk-margin-large-top" id="process">
    <!-- Título -->
    <h4 class="uk-heading-line uk-text-base"><span>Proceso De Instalación</span></h4>

    <!-- Contenedor del filtro -->
    <div uk-filter="target: .js-filter">

        <div class="uk-grid-divider uk-grid" uk-grid>
            <!-- Barra lateral (categorías) -->
            <div class="uk-width-1-4@s">
                <ul class="uk-list uk-list-divider lg-list-filter">
                    <li uk-filter-control class="uk-active">
                        <a href="#" class="uk-link-text uk-text-decoration-none">TODOS</a>
                    </li>
                    <li uk-filter-control="[data-category='plafon']">
                        <a href="#" class="uk-link-text uk-text-decoration-none">PLAFÓN</a>
                    </li>
                    <li uk-filter-control="[data-category='deck']">
                        <a href="#" class="uk-link-text uk-text-decoration-none">DECK</a>
                    </li>
                    <li uk-filter-control="[data-category='celosia']">
                        <a href="#" class="uk-link-text uk-text-decoration-none">CELOSÍA</a>
                    </li>
                    <li uk-filter-control="[data-category='fachada']">
                        <a href="#" class="uk-link-text uk-text-decoration-none">FACHADA</a>
                    </li>
                </ul>
            </div>

            <!-- Galería de imágenes -->
            <div class="uk-width-expand">
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match js-filter" uk-grid uk-lightbox="animation: scale">
                    <!-- Imagen 1 - PLAFÓN -->
                    <div data-category="plafon">
                        <a class="uk-inline" href="{{ asset('images/malone.jpg') }}" data-caption="Imagen 1 - PLAFÓN">
                            <img src="{{ asset('images/malone.jpg') }}" alt="Imagen 1 - PLAFÓN">
                        </a>
                    </div>
                    <!-- Imagen 2 - DECK -->
                    <div data-category="deck">
                        <a class="uk-inline" href="{{ asset('images/arqui.jpg') }}" data-caption="Imagen 2 - DECK">
                            <img src="{{ asset('images/arqui.jpg') }}" alt="Imagen 2 - DECK">
                        </a>
                    </div>
                    <!-- Imagen 3 - CELOSÍA -->
                    <div data-category="celosia">
                        <a class="uk-inline" href="{{ asset('images/pola.jpg') }}" data-caption="Imagen 3 - CELOSÍA">
                            <img src="{{ asset('images/pola.jpg') }}" alt="Imagen 3 - CELOSÍA">
                        </a>
                    </div>
                    <!-- Imagen 4 - FACHADA -->
                    <div data-category="fachada">
                        <a class="uk-inline" href="{{ asset('images/cuart.jpg') }}" data-caption="Imagen 4 - FACHADA">
                            <img src="{{ asset('images/cuart.jpg') }}" alt="Imagen 4 - FACHADA">
                        </a>
                    </div>
                    <!-- Imagen 5 - PLAFÓN -->
                    <div data-category="plafon">
                        <a class="uk-inline" href="{{ asset('images/pla.jpg') }}" data-caption="Imagen 5 - PLAFÓN">
                            <img src="{{ asset('images/pla.jpg') }}" alt="Imagen 5 - PLAFÓN">
                        </a>
                    </div>
                    <!-- Imagen 6 - FACHADA -->
                    <div data-category="fachada">
                        <a class="uk-inline" href="{{ asset('images/miki.jpg') }}" data-caption="Imagen 6 - FACHADA">
                            <img src="{{ asset('images/miki.jpg') }}" alt="Imagen 6 - FACHADA">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
