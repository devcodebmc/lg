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
                    @foreach ($project->proceedings as $step)
                        <li uk-filter-control="[data-category='{{ strtolower($step) }}']">
                            <a href="#" class="uk-link-text uk-text-decoration-none">
                                {{ strtoupper($step) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Galería de imágenes -->
            <div class="uk-width-expand">
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match js-filter" uk-grid uk-lightbox="animation: scale">
                    @foreach ($project->secondaryImages as $key=>  $seconImage)
                    <div data-category="{{ $seconImage->category }}">
                        <a class="uk-inline" href="{{ asset('storage/'.$seconImage->image_path) }}" 
                            data-caption="{{ 'Imagen ' . ($key + 1) . ' - ' . $seconImage->category }}">
                            <img src="{{ asset('storage/'.$seconImage->image_path) }}" 
                                alt="{{ $seconImage->category }}">
                        </a>
                    </div>                            
                    @endforeach
            </div>
            
        </div>
    </div>
</div>
