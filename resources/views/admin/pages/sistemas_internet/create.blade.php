@extends('admin.layout.app')
@section('content')
@section('title','Cadastrar Novo Produto')
    @section('content')
        <h1>Cadastrar Novo Produto</h1>
    @include('admin.includes.alerts')
        <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
            @include('admin.pages.products._partials.form')

        </form>   
    @endsection    
  

@endsection

