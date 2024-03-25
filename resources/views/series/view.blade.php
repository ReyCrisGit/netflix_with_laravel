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
            margin: 30px 0;

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
            <h1 class="title_encabezado">Series</h1>
        </header>
        <main class="main_container">
            <section class="container_video">
                @switch($serie->nombre)
                    @case('La Casa de Papel')
                        <video class="video"
                            src="{{ asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4') }}"
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Vis a Vis')
                        <video src="{{ asset('videos/series/Vis a Vis (Temporada 1) - Trailer.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Aquí no hay quien viva')
                        <video src="{{ asset('videos/series/Aqui no hay quien viva Trailer.mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('La que se avecina')
                        <video
                            src="{{ asset('videos/series/La Que se Avecina temporada 14 - Tráiler oficial - Prime Video España.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Fariña')
                        <video src="{{ asset('videos/series/Fariña - Trailer.mp4') }} " controls="" autoplay=""
                            muted="false" loop=""></video>
                    @break;
                    @case('El Ministerio del Tiempo')
                        <video
                            src="{{ asset('videos/series/El Ministerio del Tiempo   Trailer  Subtitulado  HBO  2020  HD.mp4') }} "
                            controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                    @case('Isabel')
                        <video src="{{ asset('videos/series/Isabel - Trailer.mp4') }} " controls="" autoplay=""
                            muted="false" loop=""></video>
                    @break;
                    @case('Carlos, Rey Emperador')
                        <video src="{{ asset('videos/series/Carlos Rey Emperador.mp4') }} " controls="" autoplay=""
                            muted="false" loop=""></video>
                    @break;
                    @case('Velvet')
                        <video src="{{ asset('videos/series/Velvet - Tráiler - blimtv.mp4') }} " controls="" autoplay=""
                            muted="false" loop=""></video>
                    @break;
                    @case('Las Chichas del Cable')
                        <video src="{{ asset('videos/series/Las Chicas del Cable (Tráiler).mp4') }} " controls=""
                            autoplay="" muted="false" loop=""></video>
                    @break;

                    @default
                        <p>No hay video disponible para esta película.</p>
                    @break;
                @endswitch
                <div class="info">
                    <p>Nombre: {{ $serie->nombre }}</p>
                    <p>Temporadas: {{ $serie->temporadas }}</p>
                    <p>Episodios: {{ $serie->episodios }}</p>
                    <p>Sinopsis: {{ $serie->sinopsis }}</p>
                    <p>Duración: {{ $serie->duracion }}</p>
                    <p>Género: {{ $serie->genero_serie->nombre }}</p>
                    <p>Mi lista: {{ $serie->en_lista }}</p>
                    <p>Me gusta: {{ $serie->like_count }}</p>
                </div>
            </section>
        </main>
        <div class="boton_container">
            <a href="/series" class="boton">Volver</a>
        </div>
    </section>
</body>

</html>
