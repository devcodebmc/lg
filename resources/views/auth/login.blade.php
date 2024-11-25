@extends('backend.layouts.authLayout')

@section('content')
<section class="uk-align-center uk-width-1-3@s">
    {{-- Mensaje de error general --}}
    @if ($errors->has('email') || $errors->has('password'))
        <div class="uk-alert-danger uk-margin-small-top" uk-alert>
            <p>Por favor, corrige los errores en los campos e intenta de nuevo.</p>
        </div>
    @endif
    <h2>Inicio de sesión</h2>
    <form method="POST" action="{{ route('login') }}" class="uk-form-stacked">
        @csrf
        @method('post')
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

        {{-- Botón de envío --}}
        <button type="submit" class="uk-button uk-button-primary uk-button-small">
            Iniciar Sesión
        </button>

    </form>
    <br>
</section>
@endsection
