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
            <h1 id='Msg-BemVindo'>Central de Login ✏️</h1>
            </center>
            <h2 class='emoji'>📩</h2>
            <h2 class='Txt1'>E-mail:</h2>
            <br/>
            
            <input name='email' class='btnTxt' placeholder='E-mail'/>
            <br/>
            <h2 class='emoji'>🔑</h2>
            <h2 class='Txt2'>Senha:</h2>
            <br/>
            <input name='senha' class='btnTxt' type='password' placeholder='Senha'/>
            <h2 class='materia'>Selecione o seu curso:</h2>
            @foreach ($cursos as $cursos)
            <input class='cursobtn' type='checkbox'></input>
            <h3 class='curso'>{{ $cursos->nomecurso }}</h3>
            <br/>
            @endforeach
            <br/>
            <form action="/presença/{$curso}" method="get">
            @csrf
            <input class='btnEnvio' type="submit"></input>
            <br/>
            </form>
            <p class="Txt1">Não tem uma conta ainda?</p>
            <form action="/cadastro" method="post">
            @csrf
            <a class="btnCadastro" href="{{'/cadastro'}}"> Cadastre-se!</a>
            </form>
      </div>
    </body>
</html>
