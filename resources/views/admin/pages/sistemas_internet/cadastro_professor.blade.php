@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Cadastro Professor')
    <style>
        body {
            background-image: url(../img/papel-amassado.jpg);
    
        }
    </style>
@section('content')

<body class="bg-success">
    @include('admin.pages.sistemas_internet._partials.cabecalho')

    <div class="wrapper fadeInDown" style="margin-top: 50" >
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first"><br>
                <h1>Cadastro</h1>
            </div>

            <!-- Login Form -->
            <form action="inserir.php" method="POST" >
                @include('admin.pages.sistemas_internet._partials.form_professor')

            </form>

        </div>
    </div>
</div>
    @include('admin.pages.sistemas_internet._partials.rodape')
</body>

</html>

@endsection