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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-family);
            background-color: var(--dark-gray);
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--white-text);
            gap: 1em;

        }

        .title_encabezado {
            font-size: 36pt;
        }

        .container_video {
            width: 100%;
            max-width: 720px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2em;
        }
        .info {
            width: 400px;
            display: flex;
            flex-direction: column;
            gap: 1em;
            
        }
        .boton_container {

        }
        .boton {
            display: block;
            padding: 1em;
            border: 3px solid var(--gray-light);
            color: var(--white-text);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="container">
        <header class="encabezado">
            <h1 class="title_encabezado">Peliculas</h1>
        </header>
        <main class="main_container">
            <section class="container_video">
                @switch($pelicula->nombre)
                    @case('Ocho apellidos vascos')
                        <video class="video" src="{{ asset('videos/peliculas/OCHO APELLIDOS VASCOS - Tráiler HD.mp4') }}"
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('El gran Lebowski')
                        <video src="{{ asset('videos/peliculas/Official Trailer - The Big Lebowski - Screen Bites.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('El secreto de sus ojos')
                        <video src="{{ asset('videos/peliculas/El Secreto de sus ojos Trailer HD.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Ciname Paradiso')
                        <video src="{{ asset('videos/peliculas/Cinema Paradiso Official Trailer.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('La isla siniestra')
                        <video src="{{ asset('videos/peliculas/La Isla Siniestra - Trailer Latino.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Contratiempo')
                        <video src="{{ asset('videos/peliculas/Contratiempo - Tráiler Teaser Castellano HD.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('[REC]')
                        <video src="{{ asset('videos/peliculas/[REC] · Trailer Oficial (Español).mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Veronica')
                        <video
                            src="{{ asset('videos/peliculas/VERÓNICA - Tráiler oficial en ESPAÑOL - Sony Pictures España.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Klaus')
                        <video src="{{ asset('videos/peliculas/La Leyenda de Klaus - Tráiler oficial - Netflix.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Coco')
                        <video src="{{ asset('videos/peliculas/Coco Official Final Trailer.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;

                    @default
                        <p>No hay video disponible para esta película.</p>
                    @break;
                @endswitch
                <div class="info">
                    <p>Nombre: {{ $pelicula->nombre }}</p>
                    <p>Sinopsis: {{ $pelicula->sinopsis }}</p>
                    <p>Duración: {{ $pelicula->duracion }}</p>
                    <p>Género: {{ $pelicula->genero_pelicula->nombre }}</p>
                    <p>Mi lista: {{ $pelicula->en_lista }}</p>
                    <p>Me gusta: {{ $pelicula->like_count }}</p>
                </div>
            </section>
        </main>
        <div class="boton_container">
            <a href="/peliculas" class="boton">Volver</a>
        </div>
    </section>
</body>

</html>
