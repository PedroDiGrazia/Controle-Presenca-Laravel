<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Escor.fe</title>
</head>
<body>
    <form action="'/" method="get">
    @csrf
    <a href="{{'/'}}" id="Logo"><h1 id='Logo'>🐛 Escor.fe</h1></a>
    </form>
    <div class="AreaTexto">
        <center>
            <h1 id='Msg-BemVindo'>Vamos ver como estão as suas presenças!🕵️</h1>
            <h2 class='cursoPresenca'>{{$cursos->nomecurso}}</h2>
        </center>
    </div>
</body>
</html>