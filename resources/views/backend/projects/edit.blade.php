@extends('backend.layouts.mainAdmin')

@section('content')

<style>
    .lg-sec-image {
        margin-top: 10px; 
        display: flex; 
        flex-wrap: wrap; 
        gap: 10px;
    }
    .lg-container-center {
        position: relative; 
        display: inline-block; 
        max-width: 150px;
    }
    .lg-icon-trash {
        color: #f15757 !important; 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        background-color: rgba(255, 255, 255, 0.7); 
        border-radius: 50%; 
        padding: 5px;
    }
</style>

<div class="uk-container">

    <h2 class="uk-heading-line uk-text-center"><span>Editar Proyecto</span></h2>

    @if(session('success'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('projects.update', $project->id) }}" method="POST" 
            enctype="multipart/form-data" 
            class="uk-form-stacked uk-margin-large-top">
        @csrf
        @method('PUT')

        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
            <!-- Título del proyecto -->
            <div>
                <label class="uk-form-label" for="title">Título del proyecto</label>
                <input class="uk-input" id="title" type="text" name="title" 
                       value="{{ old('title', $project->title) }}" placeholder="Título del proyecto">
            </div>

            <!-- Ubicación -->
            <div>
                <label class="uk-form-label" for="location">Ubicación</label>
                <input class="uk-input" id="location" type="text" name="location" 
                       value="{{ old('location', $project->location) }}" placeholder="Ubicación">
            </div>

            <!-- Responsable -->
            <div>
                <label class="uk-form-label" for="manager">Responsable</label>
                <input class="uk-input" id="manager" type="text" name="manager" 
                       value="{{ old('manager', $project->manager) }}" placeholder="Responsable">
            </div>

            <!-- Tipo de proyecto -->
            <div>
                <label class="uk-form-label" for="type">Tipo de proyecto</label>
                <input class="uk-input" id="type" type="text" name="type" 
                       value="{{ old('type', $project->type) }}" placeholder="Tipo de proyecto">
            </div>

            <!-- Fecha de entrega -->
            <div>
                <label class="uk-form-label" for="delivery_date">Fecha de entrega</label>
                <input class="uk-input" id="delivery_date" type="date" name="delivery_date" 
                       value="{{ old('delivery_date', $project->delivery_date) }}">
            </div>

            <!-- Video principal -->
            <div>
                <label class="uk-form-label" for="cover_video">URL del video (opcional)</label>
                <input class="uk-input" id="cover_video" type="text" name="cover_video" 
                       value="{{ old('cover_video', $project->cover_video) }}" placeholder="URL del video (opcional)">
            </div>
        </div>

        <!-- Descripción -->
        <div class="uk-margin uk-width-expand">
            <label class="uk-form-label" for="description">Descripción</label>
            <textarea class="uk-textarea" id="description" name="description" rows="4" 
                      placeholder="Descripción">{{ old('description', $project->description) }}</textarea>
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
                <div id="cover_image_preview" style="margin-top: 10px; display: {{ $project->cover_image ? 'block' : 'none' }}">
                    <img src="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : '' }}" alt="Vista previa imagen principal" style="width: 150px; height: auto;">
                </div>
            </div>

            <!-- Imágenes secundarias -->
            <div class="uk-width-1-2@s">
                <label class="uk-form-label" for="secondary_images">Imágenes secundarias</label>
                <div uk-form-custom="target: true">
                    <input type="file" id="secondary_images" name="secondary_images[]" multiple onchange="previewSecondaryImages(event)">
                    <input class="uk-input uk-form-width-large" type="text" placeholder="Seleccionar archivos" disabled>
                </div>
                <div id="secondary_images_preview" class="lg-sec-image">
                    @foreach ($project->secondaryImages as $image)
                        <div class="lg-container-center">
                            <!-- Imagen -->
                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                 style="width: 100%; display: block;">
                            <!-- Ícono centrado -->
                            <a 
                                href="{{ route('secondary-images.destroy', ['project' => $image->id]) }}" 
                               uk-icon="icon: trash" 
                               class="lg-icon-trash">
                            </a>
                        </div>
                    @endforeach
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
                    @foreach ($project->finishes ?? '[]' as $finish)
                        <option value="{{ $finish }}" selected>{{ $finish }}</option>
                    @endforeach
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
                    @foreach ($project->proceedings ?? '[]' as $proceeding)
                        <option value="{{ $proceeding }}" selected>{{ $proceeding }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Botones -->
        <div class="uk-margin">
            <button type="submit" 
                class="uk-button uk-button-primary uk-margin-small-top s-width">
                Actualizar Proyecto
            </button>
            <a href="{{ route('projects.index') }}" 
               class="uk-button uk-button-danger uk-margin-small-top s-width">
               Cancelar
            </a>
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
