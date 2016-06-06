<?php
// controlo de sessões
session_start();
// verifica se existe login§
if (!isset($_SESSION['cor'])) {
  // se não existe redireciona para página inicial
  header('location:inicial.php');
}

// senão : armazena nome da cor em variável $user
$user = $_SESSION['cor'];

//encerra controlo de sessões
session_write_close();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        // cor de fundo igual a cor do utilizador
        background-color: <?php echo $user ?>
      }
    </style>
  </head>
  <body>
    
    <h1> ola <?php echo $user ?> </h1>

    <a href="privado.php"> privado </a>
    <a href="logout.php"> logout </a>


  </body>

</html>
