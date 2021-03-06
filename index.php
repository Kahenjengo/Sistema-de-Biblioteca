<!DOCTYPE html>
<html lang="PT-pt">
<?php
session_start();
require('conexao.php');
?>

<head>
    <title>BIBLIOGEST | Controlo de acervo e leitores</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.icon">

    <!-- Carregando fontes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Carregando icones -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Carregando Galeria -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Carregando de arquivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--<link rel="stylesheet" href="css/styles0.css">-->>
    <link rel="stylesheet" href="css/animate.css">
        <!--<script type="text/javascript" src="javascriptpersonalizado.js"></script>
    
    
    <!--<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'> -->
</head>

<body>
    <section class="bienvenidos">

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio">
                </a>
                      

                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <!-- Formul??rio pesquisar  -->
                <?php include_once('MenuPesquisa.php'); ?>
                <!-- Formul??rio pesquisar  -->
                           
                    <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="Somos.php">Somos</a></li>
                        <li><a href="Servicos.php">Servi??os</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="entrar.php">Reservado</a></li>
                    </ul>
                   
                </nav>
                                                    
                </div>
            </header>


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Acervo com obras de diversas ??reas</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Qualidade e agilidade nos atendimento dos nossos leitores.</p>
                <a href="contacto.php" class="btn btn-primary btn-lg">Contacte-nos</a>
            </div>

        </div>
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>

    </section>
    <section class="agencia p-y-1" id="agencia">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">IDENTIDADE</h2>
                    <span class="w3-xlarge" style="font-size:100px;line-height:1em;opacity:0.2">???</span>
                    <p style="margin-top:-40px; line-height: normal; padding-left:48px" class="wow fadeInDown">Guiado por um forte <b>compromisso social</b>, o Mosaiko tem como objectivo o respeito pela <b>dignidade humana</b> e o <b>desenvolvimento da sociedade angolana</b>, a partir do contributo de todos e de cada um/a.</p>
                    <p class="wow fadeInDown" style="line-height: normal; padding-left:48px">A promo????o da dignidade passa, acima de tudo, pela erradica????o da ignor??ncia atrav??s de uma consci??ncia cr??tica e do <b>incentivo a uma postura de cidadania activa</b>. Por isso, o Mosaiko procura que o trabalho de investiga????o e reflex??o seja difundido, o mais amplamente poss??vel, de forma acess??vel aos diferentes p??blicos, contribuindo para a afirma????o de uma opini??o p??blica forte e de uma sociedade civil com esp??rito de iniciativa.</p>
                    <p class="wow fadeInUp">Urge, por isso, posicionar o respeito pela Cidadania e pelos Direitos Humanos como valores fundamentais para o desenvolvimento sustent??vel de Angola, pois <b>as Pessoas s??o sempre a maior riqueza de um pa??s!</b></p>
                    <p class="wow fadeInUp">Para tal, o Mosaiko coloca-se numa perspectiva que n??o se limita ?? <b>???gest??o do quotidiano???</b>, nem pretende <b>???trabalhar para???</b>, mas <b>???trabalhar com???</b> os diferentes actores da sociedade angolana, adoptando uma estrat??gia de trabalho que passa pelo di??logo construtivo e pela transforma????o positiva das situa????es prec??rias, envolvendo os v??rios actores sociais.</p>

                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="images/agencia.svg" alt="La agencia">
                </div>
            </div>
        </div>

    </section>
    <section class="tu-mejor-eleccion p-y-1">
        <div class="container">

            <h2 class="h3 text-xs-center font-weight-bold">Porque somos <span>a melhor escolha?</span></h2>
            <p class="text-xs-center">
                Temos um <b>Acervo muito rico</b> com obras de diversas ??reas 
            </p>

            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Direitos Humanos</h4>
                            <p class="hidden-md-down">Sec????o encontramos diversos Relat??rios tais como ??ndice de desenvolvimento Humano, Na????es Unidas:  Refugiados, ACNUR/HCR. Asimo como v??rios...</p>
                            
                            
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Sociologia</h4>
                            <p class="hidden-md-down">Introdu????es, sociologia geral, hist??ria da sociologia M??todos e avalia????es; planeamento em ci??ncias sociais Autores: <b>Noberto Elias; Anthony Guiddens; Proudhon; Martin Buber; Kurt Lewin; Edgar Morin; Alain Touraine;     Raymon Aron; Gurvitch; Braudillard; J.P. Dupuy; B Sousa Santos;   Max   Weber</b>.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">

                        <i class="fa  fa-comment-o" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Ci??ncias Politicas</h4>
                            <p class="hidden-md-down">Historia das ideias pol??ticas, <b>teorias pol??ticas</b>, fundamentos da democracia; <b>Teorias das Ci??ncias Pol??ticas</b>, Teoria do Estado do Direito.   Teoria e hist??ria das ideias pol??ticas  Teorias do poder e teoria do Estado. Ideologias. Liberdade pol??tica e organiza????o do Estado. Democracia; Fascismos; Marxismos; Socialismos, Liberalismos.  .</p>
                        </div>
                    </li>
                </ul>

                <div class="hidden-md-down col-lg-4">
                    <img src="images/mundo.svg" alt="Mundo movil">
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <i class="fa  fa-calendar" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Economia- Gest??o- Desenvolvimento</h4>
                            <p class="hidden-md-down">O Desenvolvimento nesta <b>Biblioteca</b> tem de ter presen??a assinalada.  <b>Gest??o:</b> Instrumentos de gest??o ??? contabilidade e inform??tica. T??cnicas administrativas. Nesta entrada gen??rica aos tr??s sectores da <b>Economia</b> ficam os dicion??rios, colec????es e manuais escolares referentes ??reas.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Filosofia</h4>
                            <p class="hidden-md-down">Sec????o dedicada a edi????es de textos-base dos autores em <b>filosofia</b>. Uma colec????o desde <b>Manuais Escolares</b>, <b>Manuais Escolares</b>, Hist??ria da Filosofia com fases Antiguidade, <b>idade M??dia</b>, <b>Renascen??a (S??c. XV-XVI)</b>, <B>Idade Moderna(S??c. XVII ??? XVIII)</B>, <b>Dicion??rios Filosoficos</b>, at?? estudos do <b>S??culo XXI</b>.
                            </p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.3s">
                        <i class="fa  fa-cogs" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Psicologia</h4>
                            <p class="hidden-md-down">Escola de Viena; psicologia anal??tica; escola psicanal??ticas; ortodoxos e dissidentes. </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <main class="Servicios p-y-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold" style="color:#b81f33">Nossos Servi??os</h2>


            <div class="row">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="images/servicio-1.svg" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                    <h3><a href="#"  style="color:#b81f33"> Semin??rios de Metodologias</a></h3>
                    <p class="hidden-sm-down">xxxxxxxxxxxxxxxxx.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Mais informa????es</a>

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="images/servicio-2.svg" alt="Servicio Consultor??a Tecnol??gica">
                    <h3><a href="#"  style="color:#b81f33">Orienta????o de Trabalhos</a></h3>
                    <p class="hidden-sm-down">Ofrecemos xxxxxxxxxxx.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Mais informa????es</a>
                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="images/servicio-3.svg" alt="Servicio Marketing y publicidad Movil">
                    <h3><a href="#" style="color:#b81f33">Clube de Leitura </a></h3>
                    <p class="hidden-sm-down">xxxxxxxxxx</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Mais informa????es</a>
                </article>

            </div>
        </div>
    </main>


    <section class="ultimos-proyectos p-y-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold">Fotos da Galeria</h2>

            <div class="owl-carousel">
                <a href="#">
                    <h4>Ana e Cupessala</h4>
                    <img src="images/e2.jpg" alt="Ana e Cupessala">
                </a>

                <a href="#">
                    <h4>Acervo</h4>
                    <img src="images/esp13.jpg" alt="Apps Uber">
                </a>

                <a href="#">
                    <h4>Acervo</h4>
                    <img src="images/esp4.jpg" alt="App Pizza Per??">
                </a>

                <a href="#">
                    <h4>App Muebles Hoy</h4>
                    <img src="images/esp14.jpg" alt="App Muebles Hoy">
                </a>

                <a href="#">
                    <h4>App Clima Per??</h4>
                    <img src="images/esp7.jpg" alt="App Clima Per??">
                </a>

                <a href="#">
                    <h4>App  Playa</h4>
                    <img src="images/esp15.jpg" alt="App  Playa">
                </a>
                 <a href="#">
                    <h4>Acervo</h4>
                    <img src="images/esp4.jpg" alt="App Pizza Per??">
                </a>


            </div>
        </div>
    </section>
    <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
            <p>Copyright ?? 2017 <B>BiblioGest</B>. Todos Direitos reservados <B>| GABRIEL KAHENJENGO</B></p>
            <ul class="redes-sociales">
                <li><a href="facebook.com/GabrielKahenjengo"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carregando de arquivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoWidth: false,
            navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2,
                    margin: 20
                },
                800: {
                    items: 3,
                    margin: 20
                },
                1000: {
                    items: 4,
                    margin: 20
                }
            }
        })

    </script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
    <script src="js/fontawesome-all"></script>



</body>

</html>
