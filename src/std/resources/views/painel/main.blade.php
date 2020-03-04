<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href= "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
    <link rel="stylesheet" href="{{ asset('/css/welcome/main.css') }}" type="text/css">
    <style>
        #app {
            
        }
        #i {
            margin-top: 10%;
            margin-top: 3%;
        }
    </style>
    <title>Study Tube</title>
</head>
<body>
    @if(session()->has('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif
    <div id="faixa">
        <div id="caixa">
            <center>
                <a href="{{ route("user.logout") }}">Sair</a>
                <a href="{{ route("video.index")}}">Upload</a>
            </center>
        </div>        
    </div>
    <br/>
    <center>
        <img id="i" src="https://brightplanet.com/wp-content/uploads/sites/8/2016/04/play-1073616_1280.png" width="220">
        <h1 style="width: 30%;"><i>Study Tube</i></h1>
        <div id="app"><search></search></div>
    </center>
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>