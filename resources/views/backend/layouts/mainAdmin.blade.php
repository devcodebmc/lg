<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Construcción y Remodelación LG</title>
    {{-- UIkit Styles --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        /* Estilo para el menú hamburguesa */
        .hamburger-menu {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1100;
            background: #222;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Menú lateral deslizante */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #222;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
            z-index: 1000;
            transform: translateX(-100%); /* Oculto inicialmente */
            transition: transform 0.3s ease;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 15px 0;
        }

        /* Mostrar la barra lateral */
        .sidebar.active {
            transform: translateX(0);
        }

        .uk-nav-default > li.uk-active > a {
            color: #b4b0b0;
        }

        /* Fondo oscuro para enfoque en el menú */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 900;
            display: none;
        }

        /* Mostrar fondo oscuro */
        .overlay.active {
            display: block;
        }

        /* Ajuste del contenido principal */
        .main-content {
            padding: 20px;
            margin-left: 0; /* Sin desplazamiento cuando el menú está cerrado */
        }

        /* Ocultar el menú hamburguesa en pantallas grandes */
        @media (min-width: 768px) {
            .hamburger-menu {
                display: none;
            }
            .sidebar {
                transform: translateX(0);
                width: 25%;
            }
            .main-content {
                margin-left: 25%;
            }
            .overlay {
                display: none !important;
            }
        }
    </style>
</head>
<body>

    <!-- Botón de menú hamburguesa -->
    <button id="hamburger-menu" class="hamburger-menu">
        ☰ Menú
    </button>

    <!-- Fondo oscuro (overlay) -->
    <div id="menu-overlay" class="overlay"></div>

    <!-- Menú lateral deslizante -->
    <div id="sidebar" class="sidebar">
        <nav>
            <h1 class="uk-h4 uk-light uk-padding uk-margin-small-top">Panel Administrativo</h1>
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-active">
                    <a href="{{ route('dashboard') }}"><span uk-icon="icon: home">
                        </span> Inicio
                    </a>
                </li>
                <li><a href="{{ route('projects.index') }}">
                        <span uk-icon="icon: list"></span> Proyectos
                    </a>
                </li>
                <li>
                    <a href="{{ route('email-received.index') }}">
                        <span uk-icon="icon: mail"></span> Correos Recibidos
                    </a>
                </li>
                <li>
                    <a href="{{ route('budget-received.index') }}">
                        <span uk-icon="icon: file-text"></span> Cotizaciones Recibidas
                    </a>
                </li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span uk-icon="icon: settings"></span> Configuración</a></li>
            </ul>
        </nav>
    </div>

    <!-- Contenido principal -->
    <main class="main-content">
        <header class="uk-background-default uk-padding-small">
            <div class="uk-container">
                <div class="uk-flex uk-flex-right uk-flex-middle">   
                    <div>
                        <span class="uk-margin-small-right">Bienvenido, <strong>Admin</strong></span>
                        <a href="{{ route('logout') }}" class="uk-icon-link" uk-icon="icon: sign-out; ratio: 1.2" title="Cerrar sesión"></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="uk-container">
            <div class="uk-card uk-card-secondary uk-card-body"
            style="display: {{ Route::currentRouteName() != 'dashboard' ? 'none' : 'block' }}">
                <h2>Bienvenido!</h2>  
            </div>    
            <div class="uk-card uk-card-secondary uk-card-body"
            style="display: {{ Route::currentRouteName() === 'dashboard' ? 'none' : 'block' }}">
                @yield('content')
            </div>
        </div>     
        
    </main>

    <!-- Pie de página -->
    <footer class="uk-background-secondary uk-padding-small uk-text-center">
        <p class="uk-text-small">© 2024 Construcción y Remodelación LG. Todos los derechos reservados.</p>
    </footer>

    {{-- UIkit Scripts --}}
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script>
        // Variables para el menú hamburguesa y la barra lateral
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('menu-overlay');

        // Función para alternar el menú
        function toggleMenu() {
            sidebar.classList.toggle('active'); // Mostrar/ocultar la barra lateral
            overlay.classList.toggle('active'); // Mostrar/ocultar el fondo oscuro
        }

        // Abrir el menú al hacer clic en el botón
        hamburgerMenu.addEventListener('click', toggleMenu);

        // Cerrar el menú al hacer clic en el fondo oscuro
        overlay.addEventListener('click', toggleMenu);
    </script>
    @stack('jsAdmin')
</body>
</html>
