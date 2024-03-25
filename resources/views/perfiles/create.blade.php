<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="icon" href="{{asset('netflix.png')}}" type="imagen/pgn" sizes="16x16">
    <script>
        function Eliminar(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
    <style>
        :root {
            /*Background-color*/
            --white: #ffffff;
            --black: #000000;
            --dark-gray: #141414;
            --gray: #ffffff4d;
            --gray-light: #aaaaaa;
            --red: #e50914;
            --dark-red: #b9090b;
            /* Text color */
            --white-text: #ffffff;
            --gray-text: #bcbcbc;
            --red-text: #e50914;
            --black-text: #000000;

            /* Fuentes */
            --font-family: 'Netflix Sans', sans-serif;

            /* Espaciado */
            --spacing-unit: 8px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: var(--dark-gray);
            font-family: var(--font-family);
            color: var(--white-text);
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 30px;

        }
        .container_main {
            width: 480px;
        }
        .title {
            font-size: 4rem;
            font-weight: 400;
        }
        .formulario {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .input {
            padding: 1em;
            background-color: var(--gray);
            width: 100%;
            font-size: 14pt;
        }
        .link {
            display: block;
            width: 100%;
            background-color: var(--white);
            padding: .7em;
            font-size: 16pt;
            cursor: pointer;
        }
        .boton {
            color: var(--dark-gray);
            font-weight: 700;
        }
        .link_cancelar {
            background-color: var(--dark-gray);
            text-align: center;
            text-decoration: none;
            font-size: 15pt;
            border: 3px solid var(--white);
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="encabezado">
            @if (isset($perfil))
                <h2 class="title">Editar Perfil</h2>
            @else
                <h2 class="title" >Nuevo Perfil</h2>
            @endif
        </header>
        <main class="container_main">
            <form action="{{isset($perfil) ? route('perfiles.update', $perfil->id) : route('perfiles.store')}}" method="post" class="formulario">
                @csrf
                @if (isset($perfil))
                    {{method_field('PUT')}}
                @endif
                <label for="">Nombre
                    <input class="input" type="text" name="nombre" id="" value="{{isset($perfil) ? $perfil->nombre : ''}}">
                </label>
                <label for="">Idioma
                    <input class="input" type="text" name="idioma" id="" value="{{isset($perfil) ? $perfil->idioma : ''}}">
                </label>
                <label for="">Alias
                    <input class="input" type="text" name="alias" id="" value="{{isset($perfil) ? $perfil->alias : ''}}">
                </label>
                <label for="">Correo
                    <input class="input" type="email" name="correo" id="" value="{{isset($perfil) ? $perfil->correo : ''}}">
                </label>
                <label for="">Contraseña
                    <input class="input" type="password" name="contraseña" id="" value="{{isset($perfil) ? $perfil->contraseña : ''}}">
                </label>
                <input class="link boton" type="submit" value="{{isset($perfil) ? 'Guardar' : 'Crear'}}">
                <a class="link link_cancelar" href="/perfiles">Cancelar</a>
                
            </form>
        </main>
    </div>
</body>
</html>