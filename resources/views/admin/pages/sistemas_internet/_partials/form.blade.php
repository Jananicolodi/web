@csrf

<input type="text" name="name" placeholder="Nome:" id="" value="{{$product->name ?? old('name')}}">
<input type="text" name="description" placeholder="Descrição" id="" value="{{$product->description ?? old('description')}}">
<input type="text" name="price" id="" placeholder="Preço:"value="{{$product->price ?? old('price')}}">
<button type="submit">Enviar</button>