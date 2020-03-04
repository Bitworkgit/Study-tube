<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa</title>
</head>
<body>
    <br>
    <div id="app">
        @for($a = 0; $a < count($result);$a++)
            <video-link
                url="{{ $url[$a] }}"
                titulo="{{ $result[$a]->titulo }}"
                desc="{{ $result[$a]->descript }}"
            ></video-link>
        @endfor
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>