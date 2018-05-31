<?php
$menu=[
  "home",
  "nosotros",
  "contactar",
  "login"
]
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu de navegacion</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
  <nav>
    <ul>
    <?php
    foreach ($menu as $elemento) {
      echo "<li>$elemento</li>";
    }
    ?>
    </ul>
  </nav>
  </body>
</html>
