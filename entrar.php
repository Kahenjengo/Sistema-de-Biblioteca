<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<title>BIBLIOGEST | Entrar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Página para realizar login">
	<meta name="autor" content="Gabriel Kahenjengo">

	<!-- <link rel="stylesheet" type="text/css" href="styles.css">
    Carregando fontes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Carregando icones -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

   
    <!-- Carregando de arquivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/styles0.css">
    <link rel="stylesheet" href="css/animate.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
 <body>
 <?php require('conexao.php'); ?>
 <form name="form" action="entrar.php" enctype="multipart/form-data" method="POST"  class="form">
 
		<div class="wrapper login">
		<h1 id="LoginTitulo" style="">Uma solução</h1>
        <h3 id="LoginTitulo" style="">para simplicificação de acesso ao Acervo da Biblioteca</h3>
            <br/><br/>
		<div class="contain content">
			<header class="header">
				<div class="contain">
                    <a href="index.php" class="logo">
                    <img src="images/Logo01.png" alt="Logo del sitio">
                </a>
				</div>
				
				<!--<?php
				/*
				unset($_SESSION['usuarioId'],			
		      $_SESSION['usuarioNome'], 		
		      $_SESSION['usuarioNivelAcesso'], 
		      $_SESSION['usuarioLogin'], 		
		      $_SESSION['usuarioSenha']);
			  */
				?> -->
			</header>

			
				<fieldset>
					<div class="col">
                        <label><b>USUÁRIO</b><span class="tooltip">?</span></label>
						<i class="fa fa-user"></i><input name="usuarioNome" type="text" required>
                                                   
						<label><B>SENHA</B><span class="tooltip">?</span></label>
						<i class="fa fa-lock"></i><input name="usuarioSenha" type="password"  id="password" required>
						<!--<button type="button" onclick="mostrarSenha()" id="show_password" name="show_password" class="fa fa-eye-slash" aria-hidden="true"></button> --> 
						
						
			<!-- <label for="inputPassword3">Nivel de Acesso</label>
			     <select class="form-control" name="nivel_de_acesso">
				  <option>Administrativo</option>
				  <option>Bibliotecário</option>
				  <option>Leitor/a</option>
				</select> -->
			
             <!-- <label id="informacao"></label>
					</div> -->
               
					
					
			
				<div class="form-group text-center">
			     <input type="submit" value="Iniciar" name="btn_Entrar" class="btn btn-raised btn-danger">
		      </div>
			  </fieldset>
			  
			
			
			<p class="text-center text-danger">
			<?php
			
			if(isset($_POST['btn_Entrar'])){
				
			$NomeUsuario=$_POST['usuarioNome'];	
			$NomeSenha=$_POST['usuarioSenha'];
			//$NivelAcesso=$_POST['nivel_de_acesso'];
			
			// activado seleccionar nivel de acesso 
			//$consulta = "Select* from usuario where NomeUsuario='$NomeUsuario' and Senha='$NomeSenha' and NivelAcesso='$NivelAcesso'";
			//$consulta = "Select* from usuario where NomeUsuario='$NomeUsuario' and Senha='$NomeSenha'";
			
			/*
				echo $consulta = "Select actores.*, usuario.*, bibliotecario.*, funcionario.*, leitor.*
			from actores inner join usuario on actores.id_usuario=usuario.id_usuario
			inner join bibliotecario on actores.codBibliotecario=bibliotecario.codBibliotecario
			inner join funcionario on actores.CodFuncionario=funcionario.CodFuncionario
			inner join leitor on actores.codLeitor=leitor.codLeitor			
			where usuario.NomeUsuario='$NomeUsuario' and usuario.Senha='$NomeSenha'";
			
			*/
			
			
			// Desactivado seleccionar nivel de acesso 
				
			$consulta = "Select actores.*, usuario.*
			from actores inner join usuario on actores.	id_Usuario=usuario.id_Usuario
			where usuario.NomeUsuario='$NomeUsuario' and usuario.Senha='$NomeSenha'";
            $resultado = $mysqli->query($consulta);
			if(mysqli_num_rows($resultado)>0){
			while($Registos=mysqli_fetch_array($resultado)):
				$NomeU=$Registos['NomeUsuario'];
				$SenhaU=$Registos['Senha'];
				$NivelAcesso=$Registos['NivelAcesso'];
				$CodFuncionario=$Registos['CodFuncionario'];
				$codLeitor=$Registos['codLeitor'];
				$codBibliotecario=$Registos['codBibliotecario'];
			 
			//Acesso Administrador do sistema
			if($NivelAcesso=="Administrador"){
				$consulta5 = "Select* from funcionario where CodFuncionario='$CodFuncionario'";
            $resultado5 = $mysqli->query($consulta5);
			while($Registos5=mysqli_fetch_array($resultado5)):
			?>
			<!-- ocultar o type hidden para não aparece os dados na tela e repetir a todos outros dados precisos  -->
			<input type="hidden" name="NomeFun" value="<?php echo $Registos5['NomeFun']; ?>">
			<input type="hidden" name="NivelAcesso" value="<?php echo $NivelAcesso; ?>">
            <input type="hidden" name="Foto" value="<?php echo $Registos5['Foto']; ?>">
            <input type="hidden" name="Telefone" value="<?php echo $Registos5['Telemovel']; ?>">
			<?php
			
			
			endwhile;
			echo '<script>document.form.action="admin/home.php"; document.form.submit();</script>';	
			}
			
			//Acessado do Bibliotecario no sistema
			if($NivelAcesso=="Bibliotecario"){
				$consulta6 = "Select* from bibliotecario where codBibliotecario='$codBibliotecario'";
            $resultado6 = $mysqli->query($consulta6);
			while($Registos6=mysqli_fetch_array($resultado6)):
			?>
			<!-- ocultar o type hidden para não aparece os dados na tela e repetir a todos outros dados precisos  -->
			<input type="hidden" name="NomeFun" value="<?php echo $Registos6['NomeBiblio']; ?>">
			<input type="hidden" name="NivelAcesso" value="<?php echo $NivelAcesso; ?>">
            <input type="hidden" name="Foto" value="<?php echo $Registos6['Foto']; ?>">
            <input type="hidden" name="Telefone" value="<?php echo $Registos6['Telemovel']; ?>">
			<?php
			
			
			endwhile;
			echo '<script>document.form.action="admin/home_Bibliotecario.php"; document.form.submit();</script>';	
			}
			
			
			//Acessado do Leitor no sistema
			
			if($NivelAcesso=="Leitor"){
			$consulta7 = "Select* from leitor where codLeitor='$codLeitor'";
            $resultado7 = $mysqli->query($consulta7);
			while($Registos7=mysqli_fetch_array($resultado7)):
			?>
			<!-- ocultar o type hidden para não aparece os dados na tela e repetir a todos outros dados precisos  -->
			<input type="hidden" name="NomeFun" value="<?php echo $Registos7['Nome']; ?>">
			<input type="hidden" name="NivelAcesso" value="<?php echo $NivelAcesso; ?>">
            <input type="hidden" name="Foto" value="<?php echo $Registos7['Foto']; ?>">
            <input type="hidden" name="Telefone" value="<?php echo $Registos7['Telemovel']; ?>">
			<?php
			
			
			endwhile;
			echo '<script>document.form.action="admin/home_Leitor.php"; document.form.submit();</script>';	
			}
			
			
			
			
            
				?>
				<?php
				
				
				endwhile;
				
			}
			else{
				?>
				<script>document.getElementById('informacao').innerHTML="Acesso Negado ! Usuario <font color='red'><?php echo $NomeUsuario ; ?></font> Não Cadastrado";</script>
				<?php
			//echo '<script>alert("OK")</script>';
			}
			
			
           
				
				
			
			}
			
			?>
			
		    <?php
					
             /*
			 if(isset(['btn_GerarExecel'])){
            $NomeFicheiro="Logoin ".date('d-F-Y')." ".$NomeUsuario.".xls";
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$NomeFicheiro.'"');
            header('Cache-Control: max-age=0');
            header('Cache-Control: max-age=1');
			 }
			*/

             ?>
			
		</p>
            
		</div>
        <!-- <div id="Mosaiko">
             <img src="images/Mosaiko.png">
        </div> -->
	</div>
    <style>
        #Mosaiko {
        padding: 40px;
        text-align: right;
    } 
    </style>
	<STYLE>
	button{
          &#mostrarSenha{
            position: absolute;
            bottom: 2px;
            right: 0;
            border: none;
            background-color: transparent;
            font-size: 30px;
          }
    </STYLE>
	</form>
	<!-- CHAMAR A FUNÇÃO DE MOSTRA OU OCULTA A SENHA 
	<script>
jQuery(document).ready(function($) {
  
  $('#show_password').hover(function(e) {
    e.preventDefault();
    if ( $('#password').attr('type') == 'password' ) {
      $('#password').attr('type', 'text');
      $('#show_password').attr('class', 'fa fa-eye');
    } else {
        $('#password').attr('type', 'password');
        $('#show_password').attr('class', 'fa fa-eye-slash');
    }
  });
  
});
<script>
		</script> -->

	

<script>
			function mostrarSenha(){
				var tipo = document.getElementById("password");
				if(tipo.type == "password"){
					tipo.type = "text";
					$('#show_password').attr('class', 'fa fa-eye');
				}else{
					tipo.type = "password";
					$('#show_password').attr('class', 'fa fa-eye-slash');
				}
			}
</script>

	
</body>
</html>