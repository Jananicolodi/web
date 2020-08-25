@extends('admin.layout.app')
{{-- php artisan view:clear --}}
@section('title','Perfil do Egresso')
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
                <h1 class="text-center"> PPC do Curso Superior de Tecnologia em Sistemas Para Internet</h1>
                <br>
                <h3 class="text-center"> Resumo: </h3>
                <h6>O egresso do Curso Superior de Tecnologia em Sistemas para Internet será um profissional habilitado para atuar na
                    área de informática, apoiando os mais diversos setores empresariais que necessitem de Sistemas de Informação para
                    organizar e desenvolver seus empreendimentos através da Internet.
                    O egresso deverá ter formação científico-tecnológica, bem como habilidades profissionais que o capacitem a desenvolver novas tecnologias, além de identificar e solucionar possíveis problemas relacionados a Sistemas de Informação para Internet.
                    Sendo assim, ao final do curso, o egresso deverá ter adquirido as seguintes competências técnicas:
                <ul>
                    <li>
                        Projeta, desenvolve, testa, implanta, mantém, avalia e analisa páginas para sites de Internet e intranets, sistemas de comércio eletrônico e aplicativos para plataformas móveis para a Internet;   
                    </li>
                    <li>
                        Avalia, especifica, seleciona e utiliza metodologias e ferramentas adequadas para o desenvolvimento das
                        aplicações;  
                    </li>
                    <li>
                        Elabora e estabelece diretrizes para a criação de interfaces adequadas à aplicação de acordo com características, necessidades e público-alvo;
                    </li>
                    <li>
                        Vistoria, realiza perícia, avalia, emite laudo e parecer técnico em sua área de formação;  
                    </li>
                </ul>
                O perfil do egresso do Curso Superior de Tecnologia em Sistemas para Internet está de acordo com o perfil referenciado no Catálogo Nacional dos Cursos Superiores de Tecnologia

                </h6><br>
                <h3 class="text-center"> As demais informações estão contidas no <a href="">PPC do curso</a>  </h3>
                <h6>

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

