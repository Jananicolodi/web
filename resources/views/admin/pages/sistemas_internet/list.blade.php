@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('content')
@section('title','Listagem de Arquivos')
@include('admin.pages.sistemas_internet._partials.cabecalho')
<script type="text/javascript">
    startList = function() {
    if (document.all&&document.getElementById) {
    navRoot = document.getElementById("menuDropDown");
    for (i=0; i<navRoot.childNodes.length; i++) {
    node = navRoot.childNodes[i];
    if (node.nodeName=="LI") {
    node.onmouseover=function() {
    this.className+=" over";
      }
      node.onmouseout=function() {
      this.className=this.className.replace
      (" over", "");
       }
       }
      }
     }
    }
    window.onload=startList;
</script>

    <h1>Exibindo os produtos</h1>
    {{-- <a href="{{route('products.create')}}">Cadastrar</a> --}}
    <hr>
{{-- <form action="{{route('products.search')}}" class="form form-inline" method="post">
<input type="text" name="filter" class="form-control" placeholder="Filtrar" id="" value="{{$filters['filter'] ?? ''}}">
    <input type="submit" class=" btn">
</form> --}}
    {{-- <table  id="example" class="display" style="width:100%">
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
    @endif --}}


          
          <table  id="example" class="display text-center" style="width:100%">
        <thead>
            <tr>
                <th width="100">Título</th>
                <th>Palavras-chave</th>
                <th width="100">Ano de Publicação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 1 </td>
                <td>Exemplo 1 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>Exemplo 2 </td>
                <td>Exemplo 2 </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
            <tr>
                <td>teste</td>
                <td>teste </td>
                <td>2020 </td>
                <td><a href="">Ver mais...</a> <a href="">Baixar</a> </td>
            </tr>
        </tbody>
    </table>

</div>
@include('admin.pages.sistemas_internet._partials.menu_inferior')
@include('admin.pages.sistemas_internet._partials.rodape')
@endsection
</body>
</html>
