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

    
<h3 class="text-center h3">Listagem de Trabalhos realizados</h3>
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
@include('admin.pages.sistemas_internet._partials.rodape')
@endsection
</body>
</html>
