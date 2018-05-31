<?php
$url="nosotros";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="menu.css">
  </head>
  <body>
    <ul>
      <li><a href="home.php" <?php if($url=="home"){echo "class='active'";} ?>>Inicio</a></li>
      <li><a href="contacto.php" <?php if($url=="contacto"){echo "class='active'";} ?>>Contacto</a></li>
      <li><a href="nosotros.php" <?php if($url=="nosotros"){echo "class='active'";} ?>>Nosotros</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
      <h2><?php if($url=="nosotros"){echo "PAGINA NOSOTROS";} ?></h2>
    </div>
  </body>
</html>
