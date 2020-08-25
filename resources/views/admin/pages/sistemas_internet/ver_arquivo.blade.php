@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Ver Arquivo')
@section('content')
<style>
    body {
        /* background-image: url(../img/glitter.jpg); */

    }
</style>
<body>
    <header>
        <br>

        
        
        @include('admin.pages.sistemas_internet._partials.cabecalho')
    </header>
    <!-- Mensagens de marketing e outras featurezinhas
        ================================================== -->
    <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

    <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class=" text-justify">
            <div >
                <br><br>
                <h1 class="text-center"> Título do Texto</h1>
                <br>
                <h3 class="text-center"> Resumo: </h3>
                <h6>Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso
                    Texto correspondente ao resumo do arquivo postado pelo coordenador do curso</h6><br>
                <h3 class="text-center"> Início do texto: </h3>
                <h6>Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso
                    Texto correspondente ao início do texto do arquivo postado pelo coordenador do curso

                </h6>
                <a href="" class="text-center">Baixar Arquivo</a>
              

    </div>
        </div>
        </div>
    </div><!-- /.container -->


    </section>
    <!-- FOOTER -->
    @include('admin.pages.sistemas_internet._partials.rodape')
    @endsection

  
</body>



</html> 

