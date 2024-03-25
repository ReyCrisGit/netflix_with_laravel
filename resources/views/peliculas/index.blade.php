@extends('layout')
@section('content')
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
        }

        .container {
            width: 100%;
            height: auto;
            position: relative;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: 70%;
        }

        .absolute {
            width: 95%;
            height: 110%;
            top: 0;
            right: 0;
            position: absolute;
            text-align: left;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
        }

        .container_texts {
            font-weight: 900;
            z-index: 100;
            color: #fff;
            /* margin-bottom: 30px; */
            display: flex;
            flex-direction: column;
            gap: 320px;
        }

        .container_texts::after {
            display: block;
            width: 30%;
            height: 10px;
            content: "";
            margin: auto;
            background-color: $fff;
        }

        .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.575);
        }

        .title {
            font-size: 24pt;
        }

        .nombre_serie {
            font-size: 48pt;
        }

        .sinopsis {
            width: 400px;
            font-weight: 400;
        }

        .texts {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .play_icono {
            width: 70px;
        }
        .container_video {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            flex-wrap: wrap;
            background-color: var(--dark-gray);
            padding: 30px;
        }
        .info_video {
            display: flex;
            flex-direction: column;
            margin-bottom: 50px;
            gap: 10px;
        }
        .video_texts {
            display: flex;
            justify-content: space-evenly;
            color: var(--white-text);
            font-family: var(--font-family);
            font-weight: 700;
        }

        .video_vista {
            width: 350px;
            padding: .5em;
        }

        /* .container {
                height: 50vh;
                position: relative;
            }
            video {
                position: absolute;
                top: 0`;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .capa {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #1c1c1d;
                opacity: 0.5;
                mix-blend-mode: overlay;
            }
            .container_texts {
                position: relative;
                z-index: 2;
            } */
    </style>
    <main>
        <div class="container">
            <div class="overlay"></div>
            <div class="absolute">
                <div class="container_texts">
                    <div class="container_title">
                        <h3 class="title">Peliculas</h3>
                    </div>
                    <div class="texts">
                        <h3 class="nombre_serie">Ocho Apellidos Vascos</h3>
                        <p class="sinopsis">Un hombre andaluz viaja al País Vasco para conocer a la mujer de la que se ha
                            enamorado por internet.</p>
                        <a href="{{ asset('videos/peliculas/OCHO APELLIDOS VASCOS - Tráiler HD.mp4') }}"><img
                                class="play_icono" src="{{ asset('iconos/play.svg') }}" alt="play"></a>
                    </div>
                </div>
            </div>
            <video onloadedmetadata="this.muted=true" autoplay loop>
                <source src="{{ asset('videos/peliculas/OCHO APELLIDOS VASCOS - Tráiler HD.mp4') }}">
            </video>
        </div>
        <div class="container_video">
            @foreach ($peliculas as $pelicula)
                <div class="info_video">
                    <span class=video_vista>
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
                            @case('Cinema Paradiso')
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
                    </span>
                    <div class="video_texts">
                        <span>{{ $pelicula->nombre }}</span>
                        <span>{{ $pelicula->duracion }}</span>
                        <span>{{ $pelicula->genero_nombre }}</span>
                        <span><a href="peliculas/{{ $pelicula->id }}/view"><img src="{{ asset('iconos/play.svg') }}"
                                    alt=""></a></span>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
