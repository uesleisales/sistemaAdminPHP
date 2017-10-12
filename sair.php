<?php
session_start();
session_destroy();
unset(

          $_SESSION['usuarioId']         ,
          $_SESSION['usuarioNome']       ,
          $_SESSION['usuarioSenha']      ,
          $_SESSION['usuarioNivelAcesso'],
          $_SESSION['usuarioLogin']);

header("Location: login.php");
?>