<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/welcome/main.css') }}" type="text/css">
    <title>Inicío</title>
</head>
<body>
    <div id="faixa">
        <div id="caixa">
            <center>
            <a href="{{ route("user.enter") }}">Entrar</a>
            <a href="{{ route("user.register") }}">Cadastro</a>
            </center>
        </div>        
    </div>
    <br/>
    <center>
        <img src="https://brightplanet.com/wp-content/uploads/sites/8/2016/04/play-1073616_1280.png" width="420">
        <h1><i>Study Tube</i></h1>
    </center>
</body>
</html>