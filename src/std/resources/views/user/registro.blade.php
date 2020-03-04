<link href="{{ asset('/css/register/main.css') }}" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href= "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 

<div class="carcaca">
<form method="post" action='{{ route("user.save") }}'>
        @csrf
        <input class = "entrada fields"  type="text" name="name" placeholder="Insira seu nome completo"><br><br>
        <input class = "entrada fields"  type="text" name="email" placeholder="Insira o E-mail"><br><br>
        <input class = "entrada fields"  type="password" name="password" placeholder="Insira a senha"><br><br>
        <input class = "entrada fields"  type="password" name="password_confirmation" placeholder="Confirme sua senha"><br><br>
        <input type="submit" class = "entrada bt" value="Cadastrar">

        @if(session('success'))
            <br> <br> 
            @success 
                {{session('success')}}
            @endsuccess
        @endif
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach    
@endif