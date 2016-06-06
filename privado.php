<?php
session_start();

if (!isset($_SESSION['cor'])) {
  header('location:inicial.php');
}

$user = $_SESSION['cor'];

session_write_close();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {
        background-color: <?php echo $user ?>
      }
      img {
        width: 100px;
        height: auto;
      }
      a {
        background-color : white;
        display : block;
        width : 100;
        font-size: 24px;
      }

    </style>
  </head>
  <body>
    <img src="<?php echo "images/".$user.'.jpg'?>"/>

        <a href="user.php"> user </a>
        <a href="logout.php"> logout </a>
  </body>
</html>
