<div class="uk-container uk-margin-large-top" id="process">
    <!-- Título -->
    <h4 class="uk-heading-line uk-text-base"><span>Proceso De Instalación</span></h4>

    <!-- Contenedor del filtro -->
    <div uk-filter="target: .js-filter">

        <div class="uk-grid-divider uk-grid" uk-grid>
            <!-- Barra lateral (categorías) -->
            <div class="uk-width-1-4@s">
                <ul class="uk-list uk-list-divider lg-list-filter">
                    <li data-category-filter="ALL" class="uk-active">
                        <a href="#" class="uk-link-text uk-text-decoration-none">TODOS</a>
                    </li>
                    @foreach ($project->proceedings as $step)
                        <li data-category-filter="{{ $step }}">
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
                    @foreach ($project->secondaryImages as $key => $seconImage)
                        <div class="gallery-item" data-category="{{ implode(', ', $seconImage->category ?? []) }}">
                            <a class="uk-inline" href="{{ asset('storage/' . $seconImage->image_path) }}"
                               data-caption="{{ 'Imagen ' . ($key + 1) . ' - ' . implode(', ', $seconImage->category ?? []) }}">
                                <img src="{{ asset('storage/' . $seconImage->image_path) }}" alt="{{ implode(', ', $seconImage->category ?? []) }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const filterControls = document.querySelectorAll('[data-category-filter]');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterControls.forEach(control => {
        control.addEventListener('click', (e) => {
            e.preventDefault();

            // Quitar la clase 'uk-active' de todos los filtros
            filterControls.forEach(c => c.classList.remove('uk-active'));
            control.classList.add('uk-active');

            // Obtener la categoría seleccionada
            const selectedCategory = control.getAttribute('data-category-filter');

            galleryItems.forEach(item => {
                const categories = item.getAttribute('data-category').split(',').map(c => c.trim());
                
                // Mostrar todos los elementos si la categoría es "ALL"
                if (selectedCategory === "ALL" || categories.includes(selectedCategory)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

</script>
    
@endpush