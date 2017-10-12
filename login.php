<?php 
	session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Área de usuários - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <?php
        unset(

          $_SESSION['usuarioId']         ,
          $_SESSION['usuarioNome']       ,
          $_SESSION['usuarioSenha']      ,
          $_SESSION['usuarioNivelAcesso'],
          $_SESSION['usuarioLogin']);
    ?>

    <div class="container">

      <form class="form-signin" action="valida_login.php"  method="post">
        <h2 class="form-signin-heading text-center">Área de usuários</h2>
        <label for="inputEmail" class="sr-only">Usuário </label>
        <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Digite o nome de usuário" required autofocus><br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

      
    <span class="text-center text-danger">
      	<?php
      		if(isset($_SESSION['loginErro'])){
      			echo $_SESSION['loginErro'];
      			unset($_SESSION['loginErro']); //destroi a variável
      		}
      	?>
      </span>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
