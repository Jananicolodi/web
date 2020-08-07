@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('content')
@section('title','Gestão de Produtos')
        
    <h1>Exibindo os produtos</h1>
    <a href="{{route('products.create')}}">Cadastrar</a>
    <hr>
<form action="{{route('products.search')}}" class="form form-inline" method="post">
<input type="text" name="filter" class="form-control" placeholder="Filtrar" id="" value="{{$filters['filter'] ?? ''}}">
    <input type="submit" class=" btn">
</form>
    <table  id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th width="100">Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th width="100">Ações</th>
            </tr>
        </thead>
        <tbody>

            
            @foreach ($products as $product)
            <tr>
                <td>
                    @if ($product->image)
                <img src="{{ url("storange/{$product->image}")}}" alt="{{$product->name}}" style="max-width:100px;">
                    @endif
                </td>
                <td>{{$product->name}}</td>    
                <td>{{$product->price}}</td>    
                <td>
                <a href="{{ route('products.edit',$product->id)}}">Editar</a>
                <a href="{{ route('products.show',$product->id)}}">Detalhes</a>
                </td>
            </tr>  
            @endforeach
        </tbody>
    </table>
    @if (isset($filters))
        {{!! $products->appends($filters)->links()!!}}
        
    @else
        
        {{!! $products->links()!!}}
    @endif
@endsection