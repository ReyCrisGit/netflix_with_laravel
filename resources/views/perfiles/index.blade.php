<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
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
            background-color: var(--dark-gray);
            font-family: var(--font-family);
            color: var(--white-text);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 30px;
        }
        .title {
            font-size: 4rem;
            font-weight: 400;
        }

        .perfil_img {
            width: 150px;
        }
        .container_items {
            display: flex;
            width: 80%;
            max-width: 1080px;
            justify-content: center;
        }
        .container_perfil {
            display: flex;
            flex-direction: column;
            
        }
        .botones {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 250px;
        }
        .link {
            display: block;
            padding: 1em;
    
            color: white;
            width: 100%;
            text-align: center;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        .boton {
            border: none;
            font-size: 11pt;
        }
    </style>
</head>
<body>
    {{-- <main class="container_main">
        <table class="tabla">
            @foreach ($perfiles as $perfil)
                <tr>
                    <td>{{$perfil->nombre}}</td>
                    <td>
                        <a href="/series"><img class="perfil_img" src="{{asset('iconos/perfil.svg')}}" alt=""></a>
                        <a href="perfiles/{{$perfil->id}}/view">Ver</a>
                        <a href="/series">Ver</a>
                        <a href="perfiles/{{$perfil->id}}/edit">Editar</a>
                        <form action="{{route('perfiles.destroy', $perfil->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            @csrf
                            <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar perfil')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="perfiles/create">Nuevo Perfil</a>
    </main> --}}
    <section class="container">
        <header class="encabezado">
            <h1 class="title">¿Quién está viendo ahora?</h1>
        </header>
        <div class="container_items">
            @foreach ($perfiles as $perfil)
            <div class="container_perfil1 container_perfil">
                <div class="botones">
                    <a href="/series"><img class="perfil_img" src="{{asset('iconos/perfil.svg')}}" alt=""></a>
                    <a class="link" href="/series">{{$perfil->nombre}}</a>
                    <a class="link" href="perfiles/{{$perfil->id}}/edit">Editar</a>
                    <form action="{{route('perfiles.destroy', $perfil->id)}}" method="POST">
                        {{method_field('DELETE')}}
                        @csrf
                        <input class="link boton" type="submit" value="Eliminar" onclick="return Eliminar('Eliminar perfil')">
                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        <a class="link" href="perfiles/create">Nuevo Perfil</a>
    </section>
    <div class="buttom">
        
    </div>
</body>
</html>