<div class="uk-container uk-margin-medium-top" id="more-proyects">
    <h4 class="uk-heading-line uk-text-base"><span>+ Proyectos</span></h4>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

        <div class="uk-slider-items uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m">
            <!-- Proyecto 1 -->
            @foreach ($relatedProjects as $relatedProject)
                <div>
                    <div class="uk-panel">
                        <img src="{{ asset('storage/' . $relatedProject->cover_image) }}" 
                            alt="{{ $relatedProject->title }}" 
                            width="600" 
                            height="400">
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                            <h4 class="uk-margin-remove">{{ $relatedProject->title }}</h4>
                            {{-- <p class="uk-margin-remove">{{ $relatedProject->description }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <!-- Proyecto 2 -->
            <div>
                <div class="uk-panel">
                    <img src="{{ asset('images/arqui.jpg') }}" alt="" width="600" height="400">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h4 class="uk-margin-remove">Proyecto 2</h4>
                        <p class="uk-margin-remove">Descripción breve del proyecto.</p>
                    </div>
                </div>
            </div>
            <!-- Proyecto 3 -->
            <div>
                <div class="uk-panel">
                    <img src="{{ asset('images/pola.jpg') }}" alt="" width="600" height="400">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h4 class="uk-margin-remove">Proyecto 3</h4>
                        <p class="uk-margin-remove">Descripción breve del proyecto.</p>
                    </div>
                </div>
            </div>
            <!-- Proyecto 4 -->
            <div>
                <div class="uk-panel">
                    <img src="{{ asset('images/cuart.jpg') }}" alt="" width="600" height="400">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h4 class="uk-margin-remove">Proyecto 4</h4>
                        <p class="uk-margin-remove">Descripción breve del proyecto.</p>
                    </div>
                </div>
            </div>
            <!-- Proyecto 5 -->
            <div>
                <div class="uk-panel">
                    <img src="{{ asset('images/pla.jpg') }}" alt="" width="600" height="400">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h4 class="uk-margin-remove">Proyecto 5</h4>
                        <p class="uk-margin-remove">Descripción breve del proyecto.</p>
                    </div>
                </div>
            </div>
             <!-- Proyecto 6 -->
             <div>
                <div class="uk-panel">
                    <img src="{{ asset('images/miki.jpg') }}" alt="" width="600" height="400">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                        <h4 class="uk-margin-remove">Proyecto 6</h4>
                        <p class="uk-margin-remove">Descripción breve del proyecto.</p>
                    </div>
                </div>
            </div> --}}

        </div>

        <!-- Navegación -->
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

    </div>
</div>
