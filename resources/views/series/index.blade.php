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

        /* .serie {
            display: flex;
            flex-direction: column;
            width: 100%;
        } */
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

    <body>
        <main>
            {{-- <div class="container">
            
            <video muted autoplay loop>
                <source src="{{asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4')}}">
            </video>
            <div class="capa"></div>
        </div> --}}
            <div class="container">
                <div class="overlay"></div>
                <div class="absolute">
                    <div class="container_texts">
                        <div class="container_title">
                            <h3 class="title">Series</h3>
                        </div>
                        <div class="texts">
                            <h3 class="nombre_serie">La Casa De Papel</h3>
                            <p class="sinopsis">Un grupo de atracadores, liderados por el Profesor, llevan a cabo un plan
                                para asaltar la Fábrica Nacional de Moneda y Timbre.</p>
                            <a
                                href="{{ asset('videos/series/La casa de papel - Tráiler de la serie - Netflix - Copy.mp4') }}"><img
                                    class="play_icono" src="{{ asset('iconos/play.svg') }}" alt="play"></a>
                        </div>
                    </div>
                </div>
                <video onloadedmetadata="this.muted=true" autoplay loop>
                    <source src="{{ asset('videos/series/La casa de papel - Tráiler de la serie - Netflix - Copy.mp4') }}">
                </video>
            </div>
            {{-- <div class="container">
            
            <video muted autoplay loop>
                <source src="{{asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4')}}">
            </video>
            <div class="capa"></div>
        </div> --}}

            {{-- <div class="series_container">
            <div class="series">
                <div class="serie">
                    <div class="video_container">
                        <video class="video" src="{{asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4')}}" controls autoplay muted loop></video>
                    </div>
                    <div class="info">
                        <span>{{$serie->nombre}}</span>                        
                        <span>{{$serie->genero_nombre}}</span>                        
                        <span>{{$serie->duracion}}</span>                        
                    </div>

                </div>
            </div>
        </div> --}}
            <div class="container_video">
                @foreach ($series as $serie)
                    <div class="info_video">
                        <span class="video_vista">
                            @switch($serie->nombre)
                                @case('La Casa de Papel')
                                    <video class="video"
                                        src="{{ asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4') }}"
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Vis a Vis')
                                    <video class="video" src="{{ asset('videos/series/Vis a Vis (Temporada 1) - Trailer.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Aquí no hay quien viva')
                                    <video class="video" src="{{ asset('videos/series/Aqui no hay quien viva Trailer.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('La que se avecina')
                                    <video class="video"
                                        src="{{ asset('videos/series/La Que se Avecina temporada 14 - Tráiler oficial - Prime Video España.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Fariña')
                                    <video class="video" src="{{ asset('videos/series/Fariña - Trailer.mp4') }} " controls=""
                                        autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('El Ministerio del Tiempo')
                                    <video class="video"
                                        src="{{ asset('videos/series/El Ministerio del Tiempo   Trailer  Subtitulado  HBO  2020  HD.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Isabel')
                                    <video class="video" src="{{ asset('videos/series/Isabel - Trailer.mp4') }} " controls=""
                                        autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Carlos, Rey Emperador')
                                    <video class="video" src="{{ asset('videos/series/Carlos Rey Emperador.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Velvet')
                                    <video class="video" src="{{ asset('videos/series/Velvet - Tráiler - blimtv.mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;
                                @case('Las Chicas del Cable')
                                    <video class="video" src="{{ asset('videos/series/Las Chicas del Cable (Tráiler).mp4') }} "
                                        controls="" autoplay="" muted="false" loop=""></video>
                                @break;

                                @default
                                    <p>No hay video disponible para esta película.</p>
                                @break;
                            @endswitch
                        </span>
                        <div class="video_texts">
                            <span>{{ $serie->nombre }}</span>
                            <span>{{ $serie->duracion }}</span>
                            <span>{{ $serie->genero_nombre }}</span>
                            <span><a href="series/{{ $serie->id }}/view"><img src="{{asset('iconos/play.svg')}}" alt=""></a></span>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <table class="series_container">
            @foreach ($series as $serie)
                <tr class="serie">
                    <td>
                        @switch($serie->nombre)
                @case('La Casa de Papel')
                    <video class="video" src="{{ asset('videos/series/La casa de papel - Tráiler de la serie - Netflix.mp4') }}"
                        controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Vis a Vis')
                    <video src="{{ asset('videos/series/Vis a Vis (Temporada 1) - Trailer.mp4') }} "
                        controls="" autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Aquí no hay quien viva')
                    <video src="{{ asset('videos/series/Aqui no hay quien viva Trailer.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('La que se avecina')
                    <video src="{{ asset('videos/series/La Que se Avecina temporada 14 - Tráiler oficial - Prime Video España.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Fariña')
                    <video src="{{ asset('videos/series/Fariña - Trailer.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('El Ministerio del Tiempo')
                    <video src="{{ asset('videos/series/El Ministerio del Tiempo   Trailer  Subtitulado  HBO  2020  HD.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Isabel')
                    <video src="{{ asset('videos/series/Isabel - Trailer.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Carlos, Rey Emperador')
                    <video src="{{ asset('videos/series/Carlos Rey Emperador.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Velvet')
                    <video src="{{ asset('videos/series/Velvet - Tráiler - blimtv.mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @case('Las Chichas del Cable')
                    <video src="{{ asset('videos/series/Las Chicas del Cable (Tráiler).mp4') }} " controls=""
                        autoplay="" muted="false" loop=""></video>
                    @break;
                @default
                    <p>No hay video disponible para esta película.</p>
                    @break;
            @endswitch
                    </td>
                    <td>{{$serie->nombre}}</td>
                    <td>{{$serie->duracion}}</td>
                    <td>{{$serie->genero_nombre}}</td>
                    <td><a href="series/{{$serie->id}}/view">Ver</a></td>
                </tr>
            @endforeach
        </table> --}}
        </main>
    </body>
@endsection
