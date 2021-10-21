<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <title>Contacto - BIBLIOGEST | Controlo de acervo e leitores</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

   <!-- <link rel="stylesheet" type="text/css" href="styles.css">
    Carregando fontes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Carregando icones -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Carregando Galeria -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Carregando de arquivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
     <!--<link rel="stylesheet" href="css/styles0.css">-->
    <link rel="stylesheet" href="css/animate.css">

	<!--<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'> -->
</head>
<?php require('conexao.php') ?>

<?php

?>
 
 
<body class="paginas-internas">
    <section class="bienvenidos">
<body>
        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio">
                </a>

                <button name="Pesquisar_Contacto" type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                 <!-- Formulário pesquisar  -->
                <?php include_once('MenuPesquisa.php'); ?>
                <!-- Formulário pesquisar  -->

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="Somos.php">Somos</a></li>
                        <li><a href="Servicos.php">Serviços</a></li>
                        <li class="active"><a href="contacto.php">Contacto</a></li>
                        <li><a href="entrar.php">Reservado</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Contacto</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Para qualquer informação só contactar...</p>

            </div>

        </div>

    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Contacto

                </div>
            </div>
        </div>
    </section>
	<!--<script type="text/javascript">
			function validar_form_contato(){
				var nome = formcontato.nome.value;
				var email = formcontato.email.value;
				var assunto = formcontato.assunto.value;
				var mensagem = formcontato.mensagem.value;
				
				if(nome == ""){
					alert("Campo nome é obrigatorio");
					formcontato.nome.focus();
					return false;
				}if(email == ""){
					alert("Campo email é obrigatorio");
					formcontato.email.focus();
					return false;
				}if(assunto == ""){
					alert("Campo assunto é obrigatorio");
					formcontato.assunto.focus();
					return false;
				}if(mensagem == ""){
					alert("Campo mensagem é obrigatorio");
					formcontato.mensagem.focus();
					return false;
				}
			}
		</script> -->
	<form name="form" action="contacto.php" enctype="multipart/form-data" method="POST"  class="form">	
     <main class="p-y-1">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b-2">Formulário de contacto</h2>


                    <form action="#">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label"><b>Nome:</b></label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="Nome" placeholder="Digite o seu nome" data-toggle="tooltip" data-placement="top" title="Escreva o seu nome completo" required > <!--pattern=“[a-z\s]+$”/-->
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label"><b>E-mail:</b></label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="Email" placeholder="Digite o seu email" data-toggle="tooltip" data-placement="top" title="Escreva o seu e-mail"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label"><b>Assunto:</b></label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="Assunto" placeholder="Digite o Assunto" data-toggle="tooltip" data-placement="top" title="Escreva o seu nome completo" required > <!--pattern=“[a-z\s]+$”/-->
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label"><b>Mensagem:</b></label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="Mensagem" placeholder="Digite a sua mensagem" data-toggle="tooltip" data-placement="top" title=" mensagem" required></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" name="btn_Enviar" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-primary">Limpar</button>
                            </div>
                        </div>
						<label id="informacao"></label>
						
						<?php
						//Cadastrar
						if(isset($_POST['btn_Enviar'])){
							
							$i=1;
							$consulta1 = "select *from mensagem";
                            $resultado1 = $mysqli->query($consulta1);
							while($Registos1=mysqli_fetch_array($resultado1)):
							$i++;
							endwhile;
							
							$Nome = $_POST['Nome'];
							$Assunto = $_POST['Assunto'];
							$Email= $_POST['Email'];
							$Mensagem = $_POST['Mensagem'];
							
							$consulta2 = "select *from mensagem where Nome = '$Nome'";
                            $resultado2 = $mysqli->query($consulta2);
							if(mysqli_num_rows($resultado2)>0){
								?>
				                <script>document.getElementById('informacao').innerHTML="<font color='#d71930'><?php echo $Nome ; ?> mensagem já enviada </font>";</script>
				                <?php
								
							}else{
								
								$consulta = "insert into mensagem (	id_contacto, Nome, Assunto, Email, Mensagem) values ('$i','$Nome','$Assunto','$Email', '$Mensagem')";
                            $resultado = $mysqli->query($consulta);
							
							if($resultado){
								?>
				                <script>document.getElementById('informacao').innerHTML="<font color='#7b001a'><?php echo $Nome ; ?> Mensagem enviada com Sucesso </font> ";</script>
				                <?php
							}else{
								
								?>
				                <script>document.getElementById('informacao').innerHTML="Erro de Cadastro";</script>
				               <?php
							}
								
							}
							
							
							
							
						}
						

                        ?>
						
                  




                </div>
                <div class="col-md-4">
                    <h3>Dados de Contacto</h3>
                    <p>Preenche os campos para enviar a mensagem</p>
                    
                </div>





            </div>
        </div>
    </main>



    <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
            <p>Copyright © 2017 <B>BiblioGest</B>. Todos Direitos reservados <B>| GABRIEL KAHENJENGO</B></p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
  </form>
</body>

</html>
