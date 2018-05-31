<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Idiomas del mundo</title>
  </head>
  <body>
  <h1>Idiomas del mundo</h1>
  <?php

  //Crear el objeto de conexion
    $mysqli = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      //No ha habido error
      echo "Conexion realizada<br>";
      //Hacemos una consulta
      $consulta = "select * from countrylanguage ORDER by countrycode";
      $resultado = $mysqli->query($consulta);
      //Comprobamos errores
      if($resultado==false){
        echo $mysqli->error."<br>";
      }else{
        //Cabecera de nuestra tabla
        echo "<table border=1><tr><td>Pais</td><td>Idioma/s</td></tr>";
        $paisAnterior=null;
        foreach ($resultado as $fila) {
          $codigoPais=$fila['CountryCode'];
          $lengua=$fila['Language'];
          //Primera fila cuando no hay paises anteriores
          if($paisAnterior==null){
            echo "<tr><td>$codigoPais</td><td>$lengua";
          //Caso en el que el pais actul y el anterior sean diferentes
          //Debemos cerrar la columna y fila anterior
          }elseif($paisAnterior!=$codigoPais){
            echo "</td></tr><tr><td>$codigoPais</td><td>$lengua";
          //Si los paises son iguales no se abre nueva coluna ni fila
          }else{
            echo "<br>$lengua";
          }
          $paisAnterior=$codigoPais;
        }
        //Cerramos la ultima fila
        echo "</td></tr></table>";
      }
    }
   ?>
  </body>
</html>
