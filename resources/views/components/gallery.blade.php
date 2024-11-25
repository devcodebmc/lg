<div class="uk-container uk-margin-large-top" id="gallery">
    <h4 class="uk-heading-line uk-text-base"><span>Galería</span></h4>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" 
        uk-slideshow="animation: push; max-height: 500">

        <div class="uk-slideshow-items" style="max-width: 800px; margin: 0 auto;">
            @foreach($project->secondaryImages as $image)
            <div>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="{{ asset('storage/' . $image->image_path) }}" 
                        alt="{{ $project->title }}" uk-cover>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Botones de navegación -->
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href 
            uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href 
            uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
</div>
