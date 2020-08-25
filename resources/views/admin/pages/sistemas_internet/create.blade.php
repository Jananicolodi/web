@extends('admin.layout.app')
@section('content')
@section('title','Cadastrar Novo Professor')
    @section('content')
    <body>
        @include('admin.pages.sistemas_internet._partials.cabecalho')

        <h1>Cadastrar Novo Produto</h1>
    @include('admin.includes.alerts')
        <form action="{{ route('products.search')}}" method="post" enctype="multipart/form-data">
            @include('admin.pages.sistemas_internet._partials.form_professor')

        </form>   
    @endsection    
    @include('admin.pages.sistemas_internet._partials.rodape')

    </body>
    </html>

@endsection

