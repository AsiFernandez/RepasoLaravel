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

            <form action="{{route('validateform3')}}" method="post">
			@csrf
			Nombre:<br>
            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                @if ($errors->has('nombre'))
                    <span class="error">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            <br><br>
            Apellido:<br>

			<input type="text" name="apellido" value="{{old('apellido')}}">
                @if ($errors->has('apellido'))  
                    <span class="error">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif
            <br><br>
            DNI:<br>

			<input type="text" name="dni" value="{{old('dni')}}">
                @if ($errors->has('apellido'))  
                    <span class="error">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif
            <br><br>
			Email:<br>
			<input type="text" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <span class="error">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            <br><br>
			Teléfono:<br>
			<input type="number" name="telefono" value="{{old('telefono')}}">
                @if ($errors->has('telefono'))
                    <span class="error">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
            <br><br>
			<button type="submit">Enviar</button>
        </form> 
            <br>
            </div>
        </div>
    </body>
</html>
