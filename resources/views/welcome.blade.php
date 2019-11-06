<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                Ejercicio 4.1 :
                    <a href="contacto">4.1 A -Nombre</a>
                    <a href="blog/4">4.1 B -Identificador</a>
                    <a href="blog2/19/perro">4.1 C -Identificador y nombre validados</a>
                    <br>
                    <br>
                    <br>
                Ejercicio 4.2:
                    
                    <a href="{{route('saludo')}}">4.2 A -SALUDAR </a>
                    <a href="{{route('saludoConNombre',['nombre'=>'Asier'])}}">4.2 B -SALUDAR CON NOMBRE</a>
                    <a href="{{route('saludoNombreColor',['nombre'=>'Asier','color'=>'0000FF'])}}">4.2 C -SALUDAR CON NOMBRE Y COLOR</a>
                    <br>
                    <br>
                    <br>
                Ejercicio 4.3:
                    
                    <a href="{{route('formulario1')}}">4.3 A -SALUDO DESDE FORMULARIO </a>
                    <a href="{{route('saludoConNombre',['nombre'=>'Asier'])}}">4.2 B SALUDAR CON NOMBRE</a>
                    <a href="{{route('saludoNombreColor',['nombre'=>'Asier','color'=>'0000FF'])}}">4.2 C SALUDAR CON NOMBRE Y COLOR</a>

                </div>
            </div>
        </div>
    </body>
</html>
