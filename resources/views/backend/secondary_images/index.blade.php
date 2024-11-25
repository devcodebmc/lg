@extends('backend.layouts.mainAdmin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Imagenes Secundarias</h1>
    </div>
    <br>

    <div class="uk-table-responsive uk-overflow-auto">
        <table class="uk-table uk-table-divider">
            <thead>
                <tr class="uk-text-left">
                    <th>#</th>
                    <th>Proyecto_Id</th>
                    <th>Imagen</th>
                    <th>Category</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($secondaryImages as $secondaryImage)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $secondaryImage->project_id }}</td>
                        <td>
                            <img src="{{ asset('storage/'. $secondaryImage->image_path) }}" 
                                alt="{{ 'Imagen-'.$loop->iteration }}" width="75" height="275">
                        </td>
                        <td>
                            <select class="uk-select uk-margin-top" id="proceedings" name="proceedings[]" multiple>
                                @foreach ($proceedings ?? [] as $pro)
                                    <option value="{{ $pro }}" selected>
                                        {{ $pro }}
                                    </option>
                                @endforeach
                            </select>
                            
                        </td>
                        <td>
                            <a href="#" uk-icon="icon: pencil" title="Editar"></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No hay proyectos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
