<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'DiegoMenus')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        nav ul {
            list-style: none;
            display: flex;
            padding: 0;
        }
        nav ul li {
            margin-right: 20px;
        }
        /* Resalta la opción activa */
        .active a {
            font-weight: bold;
            color: red;
        }
        footer {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Menú de Navegación -->
    <header>
        <nav>
            <ul>
                <li class="{{ Request::is('inicio') ? 'active' : '' }}">
                    <a href="{{ url('/inicio') }}">Inicio</a>
                </li>
                <li class="{{ Request::is('fotos') ? 'active' : '' }}">
                    <a href="{{ url('/fotos') }}">Fotos</a>
                </li>
                <li class="{{ Request::is('contacto') ? 'active' : '' }}">
                    <a href="{{ url('/contacto') }}">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenido de la página -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Actividad realizada por [Tu Nombre].</p>
    </footer>
</body>
</html>
