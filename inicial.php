<?php
// iniciar controlo de sessões
session_start();

// se houver um login/cor
if (isset($_SESSION['cor'])) {
  //redirecionar para página de utilizador
  header('location:user.php');
}
// encerrar controlo de sessão
session_write_close();


// não tendo havendo login, mostrar as possibilidades
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- cada um destes urls leva uma variavel log com o valor da cor -->
    <a href="login.php?log=red">vermelho</a> |
    <a href="login.php?log=green">verde</a> |
    <a href="login.php?log=blue">azul</a>
  </body>
</html>
