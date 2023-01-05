<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/welcome.css">
    </head>
    <body>
        <form action="'/" method="get">
            @csrf
            <a href="{{'/'}}" id="Logo"><h1 id='Logo'>🐛 Escor.fe</h1></a>
            </form>
        <div class='AreaTexto'>
            <center>
            <h1 id='Msg-BemVindo'>Central de Cadastro ✏️</h1>
            </center>
            <h2 class='emoji'>📩</h2>
            <h2 class='Txt1'>Digite um e-mail valido:</h2>
            <br/>
            <input class='btnTxt' placeholder='E-mail'/>
            <br/>
            <h2 class='emoji'>🔑</h2>
            <h2 class='Txt2'>Digite uma senha:</h2>
            <br/>
            <input class='btnTxt' type='password' placeholder='Senha'/>
            <h2 class='materia'>Selecione o seu curso:</h2>
            @foreach ($cursos as $cursos)
            @csrf
            <input class='cursobtn' type='checkbox'></input>
            <h3 class='curso'>{{ $cursos->nomecurso }}</h3>
            <br/>
            @endforeach
            <br/>
            <input class='btnEnvio' type="submit"></input>
            <br/>
      </div>
    </body>
</html>
