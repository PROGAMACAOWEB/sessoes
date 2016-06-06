<?php
//iniciar o controlo se sessões
session_start();

// se existe um login/cor
if (isset($_SESSION['cor'])) {
  // redireciona para página do utilizador
  header('location:user.php');
// senão se a URL tem uma variavel log
} else if (isset($_GET['log'])) {
  // faz login com o valor de log
  $_SESSION['cor'] = $_GET['log'];
  // e redireciona para página de utilizador
  header('location:user.php');
  //senao (não existe login nem varíavel)
} else {
  // redireciona para página inicial (onde se pode fazer login)
  header('location:inicial.php');
}

//encerrar o con trolo de sessões
session_write_close();

?>
