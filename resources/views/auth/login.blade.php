
@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('content')
@section('title','IFFAR - Repositorio')
<style>
    body {
        background-image: url(img/img-fundo-login.jpg);
        font: normal arial;
    }

    h2 {
        color: rgb(70, 172, 70);
    }
</style>

<body class="text-center bg-success">
    @include('admin.pages.sistemas_internet._partials.cabecalho')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <h2>Repositório IFFAR</h2>
                <h1>Campus Panambi</h1>
            </div>

            <!-- Login Form -->
            <form action="verifica_usuario.php" method="POST">
                <input type="email" id="login" class="text-black" name="usuario" placeholder="Usuario" required>
                <input type="password" id="password" class="text-black" name="senha" placeholder="Senha" maxlength="8"
                    required>
                <button class="btn btn-success btn-lg my-sm-2 site_iffar" type="submit" style="width: 35%;">Pronto!</button>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="text-white font-weight-bolder" href="cadastro.php">Cadastre-se</a><br>
                <a class="text-white font-weight-bolder" href="troca_senha.php">Esqueceu sua senha?</a>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
@include('admin.pages.sistemas_internet._partials.rodape')

</html>
@endsection 