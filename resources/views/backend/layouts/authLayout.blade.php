<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | LG</title>
    {{-- UIkit Styles --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-margin-medium-top">
            @yield('content')
        </div>
    </div>
        
    <!-- Pie de página -->
    <footer class="uk-background-dafault uk-padding-small uk-text-center">
        <p class="uk-text-small">© 2024 Construcción y Remodelación LG. Todos los derechos reservados.</p>
    </footer>

    {{-- UIkit Scripts --}}
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script>
        const togglePasswordVisibility = () => {
            const passwordInput = document.getElementById("password");
            const lockIcon = document.getElementById("lockIcon");
    
            // Alterna la visibilidad de la contraseña
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                lockIcon.setAttribute("uk-icon", "icon: unlock"); // Cambia el icono a 'unlock'
            } else {
                passwordInput.type = "password";
                lockIcon.setAttribute("uk-icon", "icon: lock"); // Cambia el icono a 'lock'
            }
        };
    </script>
</body>
</html>
