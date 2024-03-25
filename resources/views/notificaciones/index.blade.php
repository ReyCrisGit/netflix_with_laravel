<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
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
        .container_items {
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 1080px;
            justify-content: center;
        }
        .title {
            font-size: 4rem;
            font-weight: 400;
        }
        .notificacion {
            display: flex;
            gap: 50px;
            border-bottom: 1px solid var(--white);
            margin-bottom: 20px;
        }
        .perfil {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .mensaje {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .img_perfil {
            width: 40px;
        }
        .link {
            display: inline-block;
            padding: 1em;
            background-color: var(--dark-gray);
            color: var(--white);
            width: 100%;
            text-align: center;
            text-decoration: none;
            width: max-content;
            margin: 0 auto;
            border: 3px solid var(--gray);
        }
        .link:hover {
            background-color: var(--white);
        }
    </style>
</head>
<body>
    <section class="container">
        <header class="encabezado">
            <h1 class="title">Notificaciones</h1>
        </header>
        <main>
            <div class="container_items">
                @foreach ($notificaciones as $notificacion)
                    <div class="notificacion">
                        <div class="perfil">
                            <img class="img_perfil" src="{{asset('iconos/perfil.svg')}}" alt="icono">
                            <td>{{$notificacion->perfil}}</td>
                        </div>
                        <div class="mensaje">
                            <td>{{$notificacion->mensaje}}</td>
                        </div>
                    </div>
                @endforeach
                <a class="link" href="/series">Volver</a>
            </div>
        </main>
    </section>
</body>
</html>