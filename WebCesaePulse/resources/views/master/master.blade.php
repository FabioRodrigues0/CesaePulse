<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CesaePulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('JS/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <scriptsrc="https://kit.fontawesome.com/d5fba335cd.js" crossorigin="anonymous"></scriptsrc=>
    <!-- Custom CSS (optional, remove if not needed) -->
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body>

    <!---------------------------------------- NAVBAR ----------------------------------------------->

    <body id="body-pd">
        <header class="header" id="header">

            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <div>


            <div class="header_img"> <img src="{{asset('images/cesaeimg.png')}}" alt="logocesae"> </div>

        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">CecaeClock</span> </a>
                    <div class="nav_list"> <a href="#" class="nav_link active"> <i
                                class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Home</span> </a> <a href="#" class="nav_link"> <i
                                class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Meu Perfil</span> </a> <a href="#" class="nav_link"> <i
                                class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Notificações e Lembretes </span> </a> <a href="#" class="nav_link">
                            <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Cesae Comunidade</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">Histórico</span> </a> <a href="#" class="nav_link"> <i
                                class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Estatistica</span> </a>
                    </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                        class="nav_name">SignOut</span> </a>
            </nav>

        </div>

        <!--Container Main start-->
        <main class="height-100 bg-light">
            <div class="banner_img"> <img src="{{asset('images/cesaeimg.png')}}" class="rounded float-start" alt="..."> </div><input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
            <label class="btn btn-primary" for="btn-check-2">Checked</label>

            <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" disabled>
            <label class="btn btn-primary" for="btn-check-3">Disabled</label>
        </main>
        <!--Container Main end-->
        @yield('content')
        </main>
        <footer>
            <p>&copy; {{ date('Y') }} Meu Site</p>
        </footer>
