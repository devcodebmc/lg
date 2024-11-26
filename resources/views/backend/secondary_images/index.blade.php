@extends('backend.layouts.mainAdmin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Editar Detalles de Imágenes Secundarias</h2>
    </div>
    <br>

    <div class="uk-table-responsive uk-overflow-auto">
        <table class="uk-table uk-table-divider">
            <thead>
                <tr class="uk-text-left">
                    <th>#</th>
                    <th>Proyecto</th>
                    <th>Imagen Secundaria</th>
                    <th>Procesos De Instalación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($secondaryImages as $secondaryImage)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <img src="{{ asset('storage/'. $secondaryImage->image_path) }}" 
                                alt="{{ 'Imagen-'.$loop->iteration }}" width="75" height="75">
                        </td>
                        <form action="{{ route('secondary-images.updateProceedings', $secondaryImage->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <td>
                                <div>
                                    @foreach ($proceedings as $pro)
                                        <label class="uk-margin-small-right">
                                            <input type="checkbox" 
                                                name="proceedings[]" 
                                                value="{{ $pro }}" 
                                                class="uk-checkbox"
                                                @if(in_array($pro, $secondaryImage->category ?? [])) checked @endif>
                                            {{ $pro }}
                                        </label>
                                        <br>
                                    @endforeach
                                </div>  
                            </td>
                            <td>
                                {{-- Opciones adicionales aquí si es necesario --}}
                                <button type="submit" 
                                        class="uk-button uk-button-link uk-margin-small-right"
                                        style="border: solid 1.5px #28b463; padding: 5px;">
                                    Guardar
                                </button>
                            </td>
                        </form>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No hay imágenes secundarias.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


