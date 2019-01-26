<!--<h1>CONTEUDO DA PÁGINA INICIAL</h1>-->
<style>
    .pub p{
        text-align: justify;
        text-justify: inter-word;
    }

    /*Mobile
  --------------------------------------------------*/
    @media screen and (max-width: 768px) {
        h1{
            font-size:14px;
        }
        .pub .link {

            font-size:14px;

        }
    }

</style>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="logo">
                <img src="resources/assets/images/logo.png" alt=""/>
            </div>
            <div class="carousel-item ">
                <img class="bd-placeholder-img" width="100%" height="100%" src="resources/assets/images/alunos2.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="flex-auto ">Licenciaturas</h1>
                        <p class="flex-auto d-none d-lg-block">Tens tudo para vencer, bem vindo aos melhores anos da tua vida, o teu futuro começa aqui.
                            Consulta as vastas soluções que temos para o teu futuro.</p>
                        <p class="flex-auto d-none d-lg-block"> </p>
                        <p><a class="btn btn-link" href="index.php?page=licenciatura/licenciatura" role="button">Saiba Mais</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="resources/assets/images/alunos1.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="flex-auto text-left" >CTESP</h1>
                        <p class="flex-auto d-none d-lg-block" >Cursos Técnicos Superiores Profissionais. A especialização na hora certa no sitio certo, investe no teu futuro.</p>
                        <p><a class="btn btn-link" href="index.php?page=ctesp/ctesp" role="button">Saiba Mais</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="resources/assets/images/alunos3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
                <div class="container">
                    <div class="carousel-caption text-right">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="mt-4 firstcard">    
        <div class="row">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Oferta Formativa</strong>
                        <h6 class="mb-0">
                            Escolhe a ESTG-IPPortalegre como ponto de partida para o teu futuro.
                        </h6>
                        <div class="mb-1 text-muted small">Jan 23</div>
                        <p class="card-text mb-auto mb-2">
                            Aqui encontrarás as ferramentas indispensáveis ... </p>
                        <a class="btn btn-outline-primary btn-sm" role="button" href="index.php?page=ofertaFormativa/ofertaFormativa">Continue a ler</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" width="50px" alt="Oferta Formativa" src="resources/assets/images/ofertaInformativa.png" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Premio</strong>
                        <h6 class="mb-0">
                            Projeto NJOY obtém o 3º lugar no Prémio Fundação Ilídio Pinho – Ciência na Escola
                        </h6>
                        <div class="mb-1 text-muted small">Jan 23</div>
                        <p class="card-text mb-auto">Concorreram 1269 projetos, tendo o NJOY ...</p>
                        <a class="btn btn-outline-success btn-sm" href="index.php?page=noticias/njoy/njoy">Continua a ler</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" width="50px" alt="Noticias" src="resources/assets/images/njoy.png" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 pub">    
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="resources/assets/images/estgcs.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ESECS </h4>
                    <p class="card-text flex-auto d-none d-lg-flex">Escolhe a ESECS como ponto de partida para o teu futuro. Aqui encontrarás as ferramentas indispensáveis para seres o que realmente desejas ser.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.esep.pt/pt/"  target="_BLANK" class="link">Descobre!</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="resources/assets/images/estgae.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ESAE</h4>
                    <p class="card-text flex-auto d-none d-lg-flex">Escolhe a ESAE como ponto de partida para o teu futuro. Aqui encontrarás as ferramentas indispensáveis para seres o que realmente desejas ser.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.esaelvas.pt/pt/"  target="_BLANK" class="link">Descobre!</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="resources/assets/images/ess.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ESS</h4>
                    <p class="card-text flex-auto d-none d-lg-flex">Escolhe a ESS como ponto de partida para o teu futuro. Aqui encontrarás as ferramentas indispensáveis para seres o que realmente desejas ser. </p>
                </div>
                <div class="card-footer">
                    <a href="https://www.essp.pt/pt/"  target="_BLANK" class="link">Descobre!</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="resources/assets/images/ipp.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">IPP</h4>
                    <p class="card-text flex-auto d-none d-lg-flex">Instituto Politécnico de Portalegre tem vindo a afirmar a sua ligação à comunidade.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.ipportalegre.pt/pt/" target="_BLANK" class="link">Descobre!</a>
                </div>
            </div>
        </div>
    </section><hr>

<!-- Maps***********************************    -->

<section class="mt-3">
    <h4>A Nossa localização</h4>
        <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.8763600601333!2d-7.444844648403976!3d39.268371832494644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1797e0b96e6b8f%3A0x53233ab58a51f030!2sESTG!5e0!3m2!1spt-BR!2sus!4v1548469279363"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

</section>

<span id="formresult"></span>