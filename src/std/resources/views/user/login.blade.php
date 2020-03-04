<link href="{{ asset('/css/login/main.css') }}" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href= "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 

<div class="carcaca">
<form method="post" action="{{ route("user.auth") }}">
        @csrf
        <input  class = "entrada fields" type="text" name="email" placeholder="Insira o E-mail"><br><br>
        <input  class = "entrada fields" type="password" name="password" placeholder="Insira a senha"><br><br>
        <input  class = "entrada bt" type="submit" value="Entrar">
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(session('warning'))
    <script>
        toastr.error('{{ session('warning') }}');
    </script>
@endif
