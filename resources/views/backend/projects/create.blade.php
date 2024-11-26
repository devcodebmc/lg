@extends('backend.layouts.mainAdmin')

@section('content')

<div class="uk-container">

    <h2 class="uk-heading-line uk-text-center"><span>Agregar Proyecto</span></h2>

    @if(session('success'))
        <div class="uk-alert-success" uk-alert>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="uk-alert-danger" uk-alert>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" 
            enctype="multipart/form-data" 
            class="uk-form-stacked uk-margin-large-top">
        @csrf
        @method('post')

        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
            <!-- Título del proyecto -->
            <div>
                <label class="uk-form-label" for="title">Título del proyecto</label>
                <input class="uk-input" id="title" type="text" name="title" placeholder="Título del proyecto">
            </div>

            <!-- Ubicación -->
            <div>
                <label class="uk-form-label" for="location">Ubicación</label>
                <input class="uk-input" id="location" type="text" name="location" placeholder="Ubicación">
            </div>

            <!-- Responsable -->
            <div>
                <label class="uk-form-label" for="manager">Responsable</label>
                <input class="uk-input" id="manager" type="text" name="manager" placeholder="Responsable">
            </div>

            <!-- Tipo de proyecto -->
            <div>
                <label class="uk-form-label" for="type">Tipo de proyecto</label>
                <input class="uk-input" id="type" type="text" name="type" placeholder="Tipo de proyecto">
            </div>

            <!-- Fecha de entrega -->
            <div>
                <label class="uk-form-label" for="delivery_date">Fecha de entrega</label>
                <input class="uk-input" id="delivery_date" type="date" name="delivery_date">
            </div>

            <!-- Video principal -->
            <div>
                <label class="uk-form-label" for="cover_video">URL del video (opcional)</label>
                <input class="uk-input" id="cover_video" type="text" name="cover_video" placeholder="URL del video (opcional)">
            </div>
        </div>

        <!-- Descripción -->
        <div class="uk-margin uk-width-expand">
            <label class="uk-form-label" for="description">Descripción</label>
            <textarea class="uk-textarea" id="description" name="description" rows="4" placeholder="Descripción"></textarea>
        </div>

        <hr class=" uk-divider-icon">

        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>

            <!-- Imagen principal -->
            <div class="uk-width-1-2@s">
                <label class="uk-form-label" for="cover_image">Imagen principal</label>
                <div uk-form-custom="target: true">
                    <input type="file" id="cover_image" name="cover_image" accept="image/*" onchange="previewImage(event, 'cover_image_preview')">
                    <input class="uk-input uk-form-width-large" type="text" placeholder="Seleccionar archivo" disabled>
                </div>
                <div id="cover_image_preview" style="margin-top: 10px; display: none;">
                    <img src="" alt="Vista previa imagen principal" style="max-width: 100%; height: auto;">
                </div>
            </div>

            <!-- Imágenes secundarias -->
            <div class="uk-width-1-2@s">
                <label class="uk-form-label" for="secondary_images">Imágenes secundarias</label>
                <div uk-form-custom="target: true">
                    <input type="file" id="secondary_images" name="secondary_images[]" multiple onchange="previewSecondaryImages(event)">
                    <input class="uk-input uk-form-width-large" type="text" placeholder="Seleccionar archivos" disabled>
                </div>
                <div id="secondary_images_preview" style="margin-top: 10px; display: none;">
                    <div id="secondary_images_list"></div>
                </div>
            </div>

        </div>

        <hr class=" uk-divider-icon">

        <div class="uk-grid-small uk-child-width-1-2@s" uk-grid>
            <!-- Acabados -->
            <div>
                <label class="uk-form-label" for="finishes">Acabados</label>
                <div class="uk-margin-small-top">
                    <input class="uk-input uk-form-width-medium s-width" id="new_finish" type="text" placeholder="Nuevo acabado">
                    <button 
                        type="button" 
                        class="uk-button uk-button-secondary uk-width-auto s-width" 
                        onclick="addOption('finishes', 'new_finish')">
                        Agregar
                    </button>
                </div>
                <select class="uk-select uk-margin-top" id="finishes" 
                        name="finishes[]" multiple>
                </select>
            </div>

            <!-- Procesos -->
            <div>
                <label class="uk-form-label" for="proceedings">Procesos</label>
                <div class="uk-margin-small-top">
                    <input class="uk-input uk-form-width-medium s-width" id="new_proceeding" type="text" placeholder="Nuevo proceso">
                    <button 
                        type="button" 
                        class="uk-button uk-button-secondary uk-width-auto s-width" 
                        onclick="addOption('proceedings', 'new_proceeding')">
                        Agregar
                    </button>
                </div>
                <select class="uk-select uk-margin-top" id="proceedings" 
                        name="proceedings[]" multiple>
                </select>
            </div>
        </div>

        <!-- Botones -->
        <div class="uk-margin">
            <button type="submit" 
                class="uk-button uk-button-primary uk-margin-small-top s-width">
                Guardar Proyecto
            </button>
            <button type="reset" 
                class="uk-button uk-button-danger uk-margin-small-top s-width">
                Limpiar
            </button>
        </div>
    </form>
</div>

@push('jsAdmin')
<script>

    function addOption(selectId, inputId) {
        const select = document.getElementById(selectId);
        const input = document.getElementById(inputId);
        const newOption = input.value.trim();

        if (newOption && ![...select.options].some(opt => opt.value === newOption)) {
            const option = document.createElement('option');
            option.value = newOption;
            option.textContent = newOption;
            option.selected = true;
            select.appendChild(option);
            input.value = '';
        } else {
            alert('Por favor, introduce un valor válido o que no esté duplicado.');
        }
    }

    // Función para vista previa de la imagen principal
    function previewImage(event, previewId) {
        const file = event.target.files[0];
        const preview = document.getElementById(previewId);
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = preview.querySelector('img');
            img.src = e.target.result;
            img.style.maxWidth = '150px';
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    // Función para vista previa de las imágenes secundarias
    function previewSecondaryImages(event) {
        const files = event.target.files;
        const preview = document.getElementById('secondary_images_preview');
        const list = document.getElementById('secondary_images_list');
        list.innerHTML = ''; // Limpiar las vistas previas anteriores
        preview.style.display = 'none';

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '150px';
                img.style.marginRight = '10px';
                img.style.marginTop = '10px';
                list.appendChild(img);
            }
            reader.readAsDataURL(file);
        });

        if (files.length > 0) {
            preview.style.display = 'block';
        }
    }
</script>
@endpush

@endsection
