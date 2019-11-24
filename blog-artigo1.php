<html lang="pt-br">
    <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
	    <meta http-equiv="Content-Language" content="pt-br">

        <title>Desenvolvimento de Jogos: Mais difícil do que se pensa.</title>

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
                        <h2>Desenvolvimento de Jogos: Mais difícil do que se pensa.</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                          <!-- Botão para acionar modal -->
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal">
                                Dicionário de Termos
                          </button>

                        <h4><i>Publicado dia 22 de Maio de 2019 por Tiago Silveira</i></h4>

                        <p align="Justify"  style="color: black" >
                            &emsp;&emsp;&emsp;&emsp; Em tempos passados, a engenharia de jogos era principalmente sobre otimização de baixo nível-código de escrita que rodaria rapidamente no computador de destino, alavancando pequenos truques inteligentes sempre que possível. Agora, o principal desafio técnico é simplesmente fazer com que o código funcione para produzir um resultado final que tenha alguma semelhança com a funcionalidade desejada. Para programação, usamos um ambiente de desenvolvimento de <b>compilador</b> como o Unity ou a Unreal Engine, que, basicamente, são <b>softwares</b> que permitem o desenvolvimento completo de um jogo. A maioria dos jogos agora é escrita principalmente em C#. O Unity é o compilador mais popular que temos em PCs (embora a Unreal Engine, seja uma alternativa competitiva). Normalmente, um desenvolvedor de um projeto grande, leva entre um a quatro anos para conseguir finalizar o projeto. Por exemplo, a maioria dos <b>estúdios</b> se beneficiaria da capacidade de construir grandes <b>malhas 3D</b> contínuas, com vários artistas trabalhando na mesma malha de uma só vez - ou métodos de edição de <b>malhas triangulares</b> para garantir que as rachaduras e buracos não apareçam. Assim, precisamos aumentar esses pacotes de conteúdo com nossos próprios <b>plugins</b> e ferramentas de pós - processamento, que em geral serão mal integradas e carentes de recursos, e podem apresentar problemas de robustez. Às vezes, para construir a geometria do mundo, apenas escrevemos nossos próprios editores específicos de domínio do zero (Warcraft e UnrealEd são exemplos disso).<br>

                            &emsp;&emsp;&emsp;&emsp; Historicamente, a situação em relação às ferramentas de gerenciamento de ativos também foi ruim. Ultimamente, algumas empresas aumentaram para fornecer controle de ativos especificamente para projetos de jogos. No lado da programação, nossos ciclos de compilação / edição / depuração geralmente são longos demais. Muitos jogos demoram meia hora ou mais para compilar ao iniciar do zero, ou quando um arquivo principal de cabeçalho <b>C</b> é alterado. Em geral, o C parece encorajar tempos de construção longos. Outra maneira de atacar o problema de compilação é usar uma ferramenta de terceiros para distribuir compiladores em várias máquinas (um desses produtos é Incredibuild). O tempo de inicialização normalmente pode ser de três minutos para uma compilação de <b>depuração</b> com arquivos de dados grandes para os quais a otimização de tempo de carregamento não foi feita.<br>
                            &emsp;&emsp;&emsp;&emsp; Durante o desenvolvimento, muitas vezes temos que construir o jogo para todos os tipos de compilação (<b>Debug, Release</b>) para todas as plataformas de destino (PC, Playstation 4, Xbox One, <b>Mobile</b>) antes de confirmar nossas alterações no controle de origem. O programador pode estar facilmente à espera de horas, por isso, há uma forte motivação para verificar alterações no código com a menor frequência possível. Mesmo se este for o caso, o programador ainda pode enfrentar grandes dificuldades na integração do módulo de terceiros com o resto do jogo. Muitas vezes, a <b>API</b> (application program interface) é difícil de lidar, pois incorpora alguns modelos conceituais que são inadequados para a maneira como seu jogo precisa funcionar. Geralmente, são necessárias camadas de cola espessa entre o código do jogo principal e a API de terceiros.<br>
                            &emsp;&emsp;&emsp;&emsp; Os produtos disponíveis cobrem estas áreas: áudio, baixo nível (os produtos foram muito bem sucedidos), <b>rendering</b>, <b>low-level</b> (muito bem sucedido), renderização, gerenciamento de cena (sucesso misto), detecção de colisão e física (apenas um pouco bem - sucedida, mas é muito difícil escrever esses sistemas por conta própria, então há uma vitória significativa para ferramentas de terceiros aqui), rede, animação esquelética e alvos de metamorfose (muito bem sucedidos), armazenamento persistente de objetos (sucesso misto), e linguagens de <b>script</b> (sucesso misto). Como os jogos são complicados e exigem conhecimento técnico aprofundado, pode ser difícil usar esses componentes de terceiros: muitas vezes o programador deve ter muita experiência no domínio do problema para entender como interagir com o produto com êxito. Mesmo se este for o caso, o programador ainda pode enfrentar grandes dificuldades na integração do módulo de terceiros com o resto do jogo. E como os jogos exigem muito da <b>CPU</b> (assim como da <b>GPU</b>), muitas vezes acontece que o componente de terceiros apresenta um gargalo significativo no desempenho de alguns cenários de entrada - e o programador deve corrigir essas situações ou contorná-las.<br>

                            &emsp;&emsp;&emsp;&emsp; Um programador não será competente em um jogo moderno sem uma compreensão decente da álgebra linear básica, assim como a geometria em 2D e 3D. Frequentemente, usamos representações 4D para operações básicas (coordenadas homogêneas 4D para transformações lineares gerais e <b>quatérnios</b> para representar rotações), de modo que a capacidade de raciocinar sobre dimensões superiores é extremamente útil. Para muitas tarefas de <b>renderização</b>, a matemática de processamento de sinal é muito importante (tanto o processamento de sinal linear, como o estudo mais obscuro de harmônicos esféricos.) Um bom programador de motores deve ter familiaridade com um grande número de algoritmos. Fornecedores de hardware gráfico, como AMD e NVIDIA, criam ferramentas de perfil específicas para gráficos, assim como os fabricantes de alguns consoles de jogos. Os jogos, de forma geral, sempre evoluíram para aumentar a complexidade técnica para dar aos jogadores coisas que eles nunca experimentaram antes. Assim, os desenvolvedores de jogos carregam muito risco técnico (você não pode programar com precisão o desconhecido ou prever como ele irá interagir com o resto do sistema), bem como o risco do design do jogo (como será esse recurso nunca implementado para o usuário final? Será que valerá todo esse trabalho que estamos tomando para implementá-lo?"
                            Os algoritmos mais necessários executam tarefas como particionamento espacial, <b>clustering</b> (conjunto de técnicas de prospecção de dados que visa fazer agrupamentos automáticos de dados segundo o seu grau de semelhança), e interseção e recorte de primitivos geométricos. Durante anos, foram feitas  pesquisas acadêmicas para encontrar e modificar algoritmos apropriados. No entanto, um mecanismo de jogo deve atender aos requisitos simples em tempo real, e a maioria dos trabalhos acadêmicos nas áreas relevantes é voltada para a computação em lote. (A maioria das pesquisas anteriores em gráficos foi aplicada à renderização cinematográfica offline). Esses algoritmos não se adaptam como os jogos estão começando a ser levados a sério pela comunidade acadêmica. Isso está começando a mudar, mas a maioria das pesquisas acadêmicas ainda é direcionada em direções que não nos fazem muito bem.<br>
                            &emsp;&emsp;&emsp;&emsp; Por um tempo nos concentramos principalmente em gráficos, que é uma simulação de como a luz se comporta no mundo do jogo. Mas agora estamos entrando em um momento em que as partes da simulação que governam física e inteligência artificial podem ser mais importantes para a qualidade de experiência do usuário final do que os gráficos. Como a IA generalizada é um problema não resolvido, ninguém sabe como será no futuro. Trabalhar em física nos ensinou sobre alguns problemas que podem ser generalizados como pertencentes a todo tipo de sistemas complexos simulados que evoluem no tempo. A simulação de um sistema complexo geralmente envolve a integração de quantidades ao longo do tempo usando métodos numéricos. (Se/então as declarações criarem descontinuidades, a menos que façamos um esforço explícito de outra forma ; portanto, devemos ter cuidado com as instruções if/then ao trabalhar com simulação de baixo nível!) Para ajudar a manter as coisas integráveis, eventos mundiais significativos, incluindo decisões de IA precisa ocorrer em um nível superior ao integrador básico: isto é, eles não podem simplesmente chutar sem aviso e mudar o estado do mundo. Uma vez que tenhamos feito tudo isso, precisamos nos preocupar com a rigidez - o fato de que apenas ajustando as constantes, você pode fazer com que a simulação se torne instável. Para contornar esse problema, precisamos ser bons em selecionar interações insignificantes para diminuir o tamanho do problema. Estamos sempre tentando empurrar a CPU o máximo que podemos, então a criação de perfil é muito importante. Os jogos exibem um comportamento fortemente modal baseado em condições dinâmicas ( em um momento, o envio de triângulos ao hardware gráfico pode ser um gargalo no desempenho ; no momento seguinte, detectar colisões entre entidades do jogo pode ser o problema.<br>

                            &emsp;&emsp;&emsp;&emsp; Com isso, concluímos que, embora jogar seja divertido, é preciso ter um conhecimento técnico em diversas áreas, que vão além da programação. É preciso uma análise de requisitos, cálculo, física, design, som, inúmeros testes, entre outras coisas. Mas acima de tudo, é preciso estar sempre antenado no que está em alta no quesito “Desenvolvimento de Games”, pois a cada dia que passa, uma nova tecnologia aparece. E como numa corrida, ganha quem chegar primeiro.
                          </p>
                        <h3>Fontes e referências</h3>
                        <p><a href="https://www.researchgate.net/publication/220017452_Game_Development_Harder_Than_You_Think">Jonathan Blow - "Game Development: Harder Than you think"<a></p>
                    </div>
                </div>
            </div>
         </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dicionário de termos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p align="justify">
                <b>API</b>: application program interface (Interface de Programação de Aplicativos), é um conjunto de rotinas e padrões de programação para acesso a um aplicativo de software ou plataforma baseado na Web.<br>
                <b>C</b>: Uma linguagem de programação um pouco antiga, mas utilizada até hoje pelo seu desempenho possibilidade de otimização<br>
                <b>Clustering</b>: conjunto de técnicas de prospecção de dados que visa fazer agrupamentos automáticos de dados segundo o seu grau de semelhança<br>
                <b>Compilador</b>: Um compilador é um programa de sistema que traduz um programa descrito em uma linguagem de alto nível para um programa equivalente em código de máquina para um processador.<br>
                <b>CPU</b>: CPU é a sigla para Central Process Unit, ou Unidade Central de Processamento. É um dos principais itens de hardware do computador, também conhecido como processador.<br>
                <b>Debug</b>: o mesmo de depuração<br>
                <b>Depuração</b>: é o processo de encontrar e reduzir defeitos num aplicativo de software ou mesmo em hardware.<br>
                <b>Estúdio</b>: empresas responsáveis pela criação e desenvolvimento do software (do game, no nosso caso)<br>
                <b>GPU</b>: Graphics Processing Unit, também conhecido como GPU. É a placa de vídeo do computador.<br>
                <b>Linguagens de script</b>: scripts são “roteiros” seguidos por sistemas computacionais e trazem informações que são processadas e transformadas em ações efetuadas por um programa principal.<br>
                <b>Low-level</b>: baixo nível, em português.<br>
                <b>Malha 3D</b>: (Um modelo de malha consiste em vértices, arestas e faces que usam a representação poligonal, incluindo triângulos e quadrados, para definir uma forma 3D)<br>
                <b>Malhas triangulares</b>: Malhas triangulares são uma das representações de dados espaciais mais utilizadas, pois possibilitam a manipulação e visualização de superfícies de alta complexidade, além de apresentarem diversas vantagens, como suporte direto em software e hardware.<br>
                <b>Mobile</b>: Aparelho móvel, celular<br>
                <b>Plugins</b>: um plugin ou módulo de extensão (também conhecido por plug-in, add-in, add-on) é um programa de computador usado para adicionar funções a outros programas maiores, provendo alguma funcionalidade especial ou muito específica.<br>

                <b>Quatérnios</b>: Os quaterniões ou quatérnios são uma extensão do conjunto dos números complexos.<br>
                <b>Release</b>: Liberação ou lançamento do software <br>     
              </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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