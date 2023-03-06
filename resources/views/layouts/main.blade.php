<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titlle')</title>

        <!-- Fonts -->    
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital" rel="stylesheet">

        <!-- BootStrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/users/create" class="nav-link">Cadastrar-se</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Opinar</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Minha Conta</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
            @yield('content')
        <footer>
            <p>OpineAqui &copy 2023</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>