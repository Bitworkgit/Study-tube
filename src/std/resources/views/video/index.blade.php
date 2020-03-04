<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/upload/main.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href= "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
    <link href="https://res.cloudinary.com/finnhvman/raw/upload/matter/matter-0.2.2.min.css" rel="stylesheet">
    <title>Fazer upload</title>
</head>
<body>
    <br/><br/>
    <center>
        <div id="caixa">
            <br/><br/>
            {{ Form::open(array('url' => route('video.upload'), 'files' => true))}}
                {{ Form::token() }}
                <input name="title" type="text" id="Titulo" placeholder="Titulo"><br/><br/>
                <textarea name="descript" class="fields" placeholder="Descrição"></textarea><br/><br/>
                {{ Form::file("video",["name" => "video", "id" => "video"])}}<br/><br/><br/>
                {{ Form::submit('Upload', ["class" => "bt"]) }}
            {{ Form::close() }}
        </div>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach    
    @endif
</body>
</html>