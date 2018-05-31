<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Estructuras de control</title>
  </head>
  <body>
    <?php
    //Dos numeros
    $numeroA=13.5;
    $numeroB=8.05;
    $numeroMayor=0;
    //Estructura de control
    if ($numeroA>$numeroB) {
      $numeroMayor=$numeroA;
    }elseif ($numeroA<$numeroB) {
      $numeroMayor=$numeroB;
    }else{
      //Son iguales
      $numeroMayor=$numeroB;
    }
    //Mostramos por pantalla
    echo "El numero mayor entre $numeroA y $numeroB es $numeroMayor";
     ?>
  </body>
</html>
