@extends('backend.layouts.authLayout')

@section('content')
<section class="uk-align-center uk-width-1-3@s">
    {{-- Mensaje de error general --}}
    @if ($errors->any())
        <div class="uk-alert-danger uk-margin-small-top" uk-alert>
            <p>Por favor, corrige los errores en los campos e intenta de nuevo.</p>
        </div>
    @endif
    <h2>Registro de Usuario</h2>
    <form method="POST" action="{{ route('register') }}" class="uk-form-stacked">
        @csrf
        @method('post')

        {{-- Campo de nombre --}}
        <div class="uk-margin">
            <label for="name" class="uk-form-label">Nombre</label>
            <input 
                id="name" 
                name="name" 
                type="text" 
                class="uk-input uk-form-small {{ $errors->has('name') ? 'uk-form-danger' : '' }}" 
                value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="uk-text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    
        {{-- Campo de correo electrónico --}}
        <div class="uk-margin">
            <label for="email" class="uk-form-label">Correo Electrónico</label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                class="uk-input uk-form-small {{ $errors->has('email') ? 'uk-form-danger' : '' }}" 
                value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="uk-text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    
        {{-- Campo de contraseña --}}
        <div class="uk-margin">
            <label for="password" class="uk-form-label">Contraseña</label>
            <div class="uk-inline uk-width-expand@s">
                <a href="javascript:void(0);" 
                   class="uk-form-icon uk-form-icon-flip" 
                   uk-icon="icon: lock" 
                   id="lockIcon" 
                   onclick="togglePasswordVisibility()">
                </a>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    class="uk-input uk-form-small {{ $errors->has('password') ? 'uk-form-danger' : '' }}">
            </div>
            @if ($errors->has('password'))
                <span class="uk-text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    
        {{-- Campo de confirmación de contraseña --}}
        <div class="uk-margin">
            <label for="password_confirmation" class="uk-form-label">Confirmar Contraseña</label>
            <input 
                id="password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="uk-input uk-form-small {{ $errors->has('password_confirmation') ? 'uk-form-danger' : '' }}">
            @if ($errors->has('password_confirmation'))
                <span class="uk-text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
    
        {{-- Campo de selección de rol --}}
        <div class="uk-margin">
            <label for="role" class="uk-form-label">Rol</label>
            <select 
                id="role" 
                name="role" 
                class="uk-select uk-form-small {{ $errors->has('role') ? 'uk-form-danger' : '' }}" 
                required>
                <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
            @if ($errors->has('role'))
                <span class="uk-text-danger">{{ $errors->first('role') }}</span>
            @endif
        </div>
    
        {{-- Botón de envío --}}
        <button type="submit" class="uk-button uk-button-primary uk-button-small">Registrar</button>

    </form>
</section>
@endsection
