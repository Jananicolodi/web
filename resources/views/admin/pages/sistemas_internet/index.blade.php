
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
    <table border="1">
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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Para Rodapé -->
    <script type="module" src="../analytics.js"></script>
    <link rel="stylesheet" href="./rodape/css/styles.css" />
    <link rel="icon" href="./rodape/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> -->
    <link rel="manifest" href="/manifest.json" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    <header>
        <br>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class=" font-italic">IFFAR - CAMPUS PANAMBI</h1>
                <p class="lead my-3">Várias linhas formando uma introdução, informando novos leitores rápido e
                    eficientemente sobre o que é mais interessante, neste post.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#27c202">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fotos</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>
    <!-- Mensagens de marketing e outras featurezinhas
        ================================================== -->
    <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

    <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row text-justify">
            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                    vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                    cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="140" height="140"><br><br>
                <h2>Tecnologia Em Sistemas para Internet</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                    ut fermentum massa justo.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Primeiro título de featurezinhas. <span class="text-muted">Supreendente,
                        não?!</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Aêêê, moleque! <span class="text-muted">Tá legal ou não tá?</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">E, por último, essa aqui. <span class="text-muted">Xeque-mate!</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

    </div><!-- /.container -->


    </section>
    <!-- FOOTER -->
    <footer>
        <div id="footer-content">
            <div id="sponsors">
                <div class='social-midias'>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div><br>
                <p>PATROCINADORES</p>
                <div>
                    <h1>Logo ou imagem</h1>
                </div>
                <div>
                    <script>
                        document.write(Date());
                    </script>
                </div>

            </div>
        </div>
        <p id="copyright">© Opendev 2019 - Todos os direitos reservados. </p>
    </footer>










</body>

<script src="/rodape/data/atividades.js"></script>
<script src="/rodape/js/counter.js"></script>
<script src="/rodape/js/app.js"></script>
<script src="../sw-register.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

</html>
