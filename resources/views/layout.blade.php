

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('iconos/netflix.png') }}" type="image/png" sizes="16x16">
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
        }
        .header {
            display: flex;
            height: 80px;
            overflow: hidden;
            justify-content: space-between;
            padding: 0 100px;
            background-color: var(--dark-gray);
            color: var(--gray-text);
            position: fixed;
            z-index: 1000;
            width: 100%;
        }
        .logo_container {
            width: 150px;
            height: 80px;
            border: 1px solid;
        }
        .logo_netflix {
            width: 150px;
            display: block;
        }
        .texts_nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 100px;
            color: var(--gray-text);
        }
        .icons_nav {
            display: flex;
            justify-content: center;
            align-items: center;
            
            gap: 20px;
        }
        .buscar {
            padding: 1em;
            border: none;
            border-radius: 1em;
        }
        .links_nav {
            color: var(--white-text);
            text-decoration: none;
            font-size: 13pt;
            font-weight: 700;
        }
        .links_nav:hover {
            color: var(--gray-text);
        }
        .container_footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--gray-text);
            background-color: var(--dark-gray);
            padding: 2em;
            gap: 1em;
        }
        .icons_footer {
            display: flex;
            width: 100%;
            max-width: 930px;
            gap: 20px;
        }
        .img_media {
            width: 35px;
        }
        
        .contactos {
            display: flex;
            gap: 100px;
        }
        .seccion_contacto {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .links_footer {
            color: var(--gray-text);
            text-decoration: none;
        }
        .links_footer:hover {
            text-decoration: underline;
        }
        .codigo_buttom {
            display: inline-block;
            padding: .6em;
            border: 1px solid var(--gray-light);
            color: var(--gray-text);
            text-decoration: none;
            
        }
        .container_codigo {
            width: 100%;
            max-width: 930px;
        }
        .codigo_buttom:hover {
            color: var(--white-text);
        }
        .derechos {
            width: 100%;
            max-width: 930px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="texts_nav">
                {{-- <figure class="logo_container">
                    <img class="logo_netflix" src="{{ asset('iconos/netflix_text.png') }}" alt="Netflix">
                </figure> --}}
                <img class="logo_netflix" src="{{ asset('iconos/netflix_text.png') }}" alt="Netflix">
                <a class="links_nav" href="/series">Inicio</a>
                <a class="links_nav" href="/series">Series</a>
                <a class="links_nav" href="/peliculas">Peliculas</a>
            </div>
            <div class="icons_nav">
                <form action="{{ route('series.search') }}" method="GET">
                    <input class="buscar " type="text" name="search" placeholder="Buscar">
                    <button class="buscar btn_buscar" type="submit">Buscar</button>
                </form>
                <a href="/notificaciones"><img src="{{asset('iconos/notificacion.svg')}}" alt=""></a>
                <a href="/perfiles"><img src="{{asset('iconos/perfil.svg')}}" alt=""></a>
            </div>
        </header>
    </div>
    @yield('content')
    <footer>
        <div class="container_footer">
            <div class="icons_footer">
                <a class="link_social" href="#"><img class="img_media" src="{{asset('iconos/facebook.svg')}}" alt="facebook"></a>
                <a class="link_social" href="#"><img class="img_media" src="{{asset('iconos/instagram.svg')}}" alt="instagram"></a>
                <a class="link_social" href="#"><img class="img_media" src="{{asset('iconos/twitter.svg')}}" alt="twitter"></a>
                <a class="link_social" href="#"><img class="img_media" src="{{asset('iconos/youtube.svg')}}" alt="youtube"></a>
            </div> 
            <div class="contactos">
                <div class="contacto1 seccion_contacto">
                    <a class="links_footer" href="#">Audio descriptivo</a>
                    <a class="links_footer" href="#">Relaciones con inversionistas</a>
                    <a class="links_footer" href="#">Avisos legales</a>
                </div>
                <div class="contacto2 seccion_contacto">
                    <a class="links_footer" href="#">Centro de ayuda</a>
                    <a class="links_footer" href="#">Empleo</a>
                    <a class="links_footer" href="#">Preferencias de cookies</a>
                </div>
                <div class="contacto3 seccion_contacto">
                    <a class="links_footer" href="#">Tarjeta de regalo</a>
                    <a class="links_footer" href="#">Términos de uso</a>
                    <a class="links_footer" href="#">Información corporativa</a>
                </div>
                <div class="contacto4 seccion_contacto">
                    <a class="links_footer" href="#">Prensa</a>
                    <a class="links_footer" href="#">Privacidad</a>
                    <a class="links_footer" href="#">Contáctos</a>
                </div>
            </div>
            <div class="container_codigo">
                <a href="#" class="codigo_buttom">Código de servicio</a>
            </div>
            <small class="derechos">&copy; 1997-2024 Netflix, Inc.</small>
        </div>
    </footer>
</body>

</html>
