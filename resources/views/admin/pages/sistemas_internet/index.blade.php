
@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('content')
@section('title','Home')

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

        <nav class="navbar navbar-expand-md navbar-dark fixed-top site_iffar" >
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



</html>
@endsection
