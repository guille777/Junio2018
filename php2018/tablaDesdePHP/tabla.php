<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sucesion de fibonacci</title>
  </head>
  <body>
    <table border="1px">
      <tr><td>iteracion</td><td>fibonacci</td></tr>
      <?php
      $numero1=0;
      //Primera iteracion
      echo "<tr style='border:1px solid black'><td>1</td><td>$numero1</td></tr>";
      $numero2=1;
      //Segunda iteracion
      echo "<tr><td>2</td><td>$numero2</td></tr>";
      //Dibujamos los 20 primeros numeros de fibonacci
      for ($i=3; $i < 20; $i++) {
        //Primero pintamos la suma
        $suma=$numero1+$numero2;
        echo "<tr><td>$i</td><td>$suma</td></tr>";
        //Almacenamos los numeros
        $numero1=$numero2;
        $numero2=$suma;
      }
      ?>
    </table>
  </body>
</html>
