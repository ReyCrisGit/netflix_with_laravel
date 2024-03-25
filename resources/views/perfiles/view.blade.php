<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
</head>
<body>
    <header class="encabezado">
        <h1 class="title_encabezado">¿Quién está viendo ahora?</h1>
    </header>
    <main class="container_main">
        <table class="tabla">
            <tr>
                <th>Nombre</th>
                <th>Idioma</th>
                <th>Alias</th>
                <th>Correo Electrónico</th>
                <th>Contraseña</th>
            </tr>
            <tr>
                <td>{{$perfil->nombre}}</td>
                <td>{{$perfil->idioma}}</td>
                <td>{{$perfil->alias}}</td>
                <td>{{$perfil->correo}}</td>
                <td>{{$perfil->contraseña}}</td>
            </tr>
        </table>
    </main>
    <div class="buttom">
        <a href="/perfiles">Volver</a>
    </div>
</body>
</html>