<html lang="pt-br">
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
	    <meta http-equiv="Content-Language" content="pt-br">

        <title>Engenharia de Software e Games.</title>

     <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/icon.png">

    </head>
    <body>
		<!-- menu -->
		<nav>
			<a href="index.php">Pagina Inicial</a>
			<a href="artigos.php">Artigos</a>
			<a href="blog.php">Blog</a>
			<div class="hide-menu">
				<a href=""><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div class="show-menu">
			<a href=""><i class="fa fa-bars"></i></a>
		</div>
		
 <!-- inicial -->
        <div class="top-content">
            <div class="top-content-text wow fadeInUp">
                <div class=""><span></span></div>
                <h1><ha href=""></a></h1>
                <div class=""><span></span></div>
                <p></p>
                <div class="">
                    <a class="" href="#about"></a>
                </div>
            </div> 
        </div>
        
        <!-- Sobre -->
         <div class="what-we-do-container section-container">
            <div class="container"> 
                <div class="row">
                    <div class="col-sm-12 what-we-do section-description wow fadeIn">
                        <h2>Processo de Desenvolvimento de Jogos Digitais NuESGames</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <br>

                        <div class="visao-geral">
                            <h4 align="center"  style="color: black" >
                                1. Visão geral do processo
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp; O processo de desenvolvimento de jogos digitais desenvolvido pelos membros do NuESGames,
                                tendo como base a literatura formal de engenharia de jogos [1], conta com as seguintes etapas
                                principais: 1) Concepção, Pré-produção, Produção, Pós-produçao, e Pós-lançamento. Cada uma
                                dessas etapas conta com subprocessos e tarefas específicas para dar suporte à produção de um jogo
                                digital completo, de escopo variável.
                            </p>
                            <img src="assets/img/processo/0-visaogeral.png"><br><br>
                        </div>

                        <div class="concepcao">
                            <h4 align="center"  style="color: black" >
                                2. Primeira etapa: Concepção
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp; Na etapa de concepção encontram-se tarefas para a definição dos aspectos gerais do jogo. É
                                provável que alguma dessas ideias já tenha sido pensada de maneira informal antes de os
                                desenvolvedores considerarem a aplicação de um processo formal. Aqui define-se aspectos gerais,
                                como o tipo de jogo (platformer, shooter e RPG são alguns exemplos); ambientação (período
                                histórico, futurista, cenário de fantasia, etc.); e objetivo (salvar o mundo, recuperar um artefato, ou
                                simplesmente derrotar todos os inimigos, ou adquirir o máximo de pontos possível).
                            </p>
                            <img src="assets/img/processo/1-concepcao.png"><br><br>
                        </div>

                        <div class="pre-producao">
                            <h4 align="center"  style="color: black" >
                                3. Segunda etapa: Pré-produção
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp;A etapa de pré-produção inclui em seu primeiro passo a definição de aspectos mais detalhados
                                do jogo, através do Game Design Document (GDD).
                            </p>
                            <img src="assets/img/processo/2-pre-producao.png"><br><br>
                            <h5 align="center"  style="color: black" >
                                3.4 Game Design Document
                            </h5>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp;A partir dos itens definidos no GDD é possível extrair definições formais de requisitos que
                                permitem a subsequente definição de um product backlog. Estas tarefas podem ser entendidas
                                como paralelos à etapa C do estudo [1], Feasibility Study (estudo de viabilidade), executado através
                                da verificação de aplicabilidade destes requisitos à plataforma desejada.<br>
                                &emsp;&emsp;&emsp;&emsp; Alguns subprocessos da etapa E (Designing) também pode ser identificada aqui, embora de
                                maneira incipiente. A definição de cenários, obstáculos e inimigos pode incluir esboços que
                                acompanhem a descrição escrita destes elementos.
                            </p>
                            <img src="assets/img/processo/2-1-gdd.png"><br><br>
                        </div>

                        <div class="producao">
                            <h4 align="center"  style="color: black" >
                                4. Terceira etapa: Produção
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp; A etapa de produção é feita de maneira cíclica e iterativa. Em cada ciclo, similar às sprints do
                                padrão de gerenciamento de projetos Scrum, são desenvolvidas mecânicas e artefatos
                                multimídia do módulo definido. Aqui podem ser encontrados elementos das etapas E, F, G, H, I,
                                J, K, L, e M do estudo [1]. No artigo, são propostos métodos específicos para o desenvolvimento
                                dos elementos visuais do produto, como Modelling e Texturing, não aplicáveis a jogos com
                                estilos artísticos distintos. Cada módulo desenvolvido em um ciclo da etapa de produção passa
                                por todo o processo de desenvolvimento, podendo ser entendido como uma espécie de “micro-
                                jogo” independente que deve ser testado e integrado ao produto final, podendo incluir,
                                portanto, personagens e cenários (E, F, J); artes visuais (G, H, I); e interações do jogo (K). A
                                validação desse módulo inclui testes e integração com os outros módulos já integrados (L, M, N).
                            </p>
                            <img src="assets/img/processo/3-producao.png"><br><br>
                        </div>

                        <div class="pos-producao">
                            <h4 align="center"  style="color: black" >
                                5. Quarta etapa: Pós-produção
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp; A pós-produção pode ser entendida como uma reaplicação das etapas de testes e integração
                                ao produto final. Aqui deverão ser feitos ajustes nos elementos destoantes dos outros, podendo
                                incluir oponentes e obstáculos muito difíceis de superar; itens que tenham ficado muito ou
                                pouco úteis no jogo; ou mecânicas de interação que não funcionem em acordo com as outras.
                            </p>
                            <img src="assets/img/processo/4-pos-producao.png"><br><br>
                        </div>
                        <div class="pos-lancamento">
                            <h4 align="center"  style="color: black" >
                                6. Quinta etapa: Pós-lançamento
                            </h4>
                            <p align="justify"  style="color: black" >
                                &emsp;&emsp;&emsp;&emsp; Esta etapa inclui absorver feedback de jogadores reais, prestando a estes suporte e
                                corrigindo bugs que tenham passado despercebidos pela equipe de desenvolvimento. O tempo
                                dedicado a esta etapa final pode variar consideravelmente, de acordo com a adesão da
                                comunidade ao jogo, e viabilidade financeira dessa prestação de suporte. Alguns jogos,
                                principalmente os multiplayer online, virtualmente permanecem numa etapa de pós-lançamento
                                na maior parte do seu ciclo de vida, integrando a repetição de etapas anteriores a um ciclo de
                                pós-produção.
                            </p>
                            <img src="assets/img/processo/5-pos-lancamento.png"><br><br>
                        </div>


                        </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    </body>
</html>