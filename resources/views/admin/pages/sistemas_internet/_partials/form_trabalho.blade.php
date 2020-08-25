@csrf

<input type="file" name="trabalho" id="">
<input type="text" name="titulo" placeholder="Título" id="" value="{{$arquivo->titulo ?? old('titulo')}}">
<input type="text" name="resumo" placeholder="Resumo" id="" value="{{$arquivo->resumo ?? old('resumo')}}">
<input type="text" name="palavras_chave" placeholder="palavras-chave" id="" value="{{$arquivo->palavras_chave ?? old('palavras_chave')}}">
<input type="text" name="ano_publicacao" placeholder="Ano da Publicacao" id="" value="{{$arquivo->ano_publicacao ?? old('ano_publicacao')}}">
<input type="hidden" name="local_arquivo" placeholder="Ano da Publicacao" id="" value="{{$arquivo->ano_publicacao ?? old('ano_publicacao')}}">

{{-- @foreach ($collection as $item)
{{$cursos->nome}}<input type="radio" name="{{$cursos->$id}}" id="">
@endforeach --}}
Tecnologia em Sistemas para Internet<input type="radio" name="" id="">
<button type="submit">Enviar</button>palavras_chave