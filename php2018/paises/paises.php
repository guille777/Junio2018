<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paises del mundo</title>
  </head>
  <body>
  <h1>Paises del mundo</h1>
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
      $resultado = $mysqli->query("SELECT * FROM country");
      //Comprobamos errores
      if($resultado==false){
        echo $mysqli->error."<br>";
      }else{

        foreach ($resultado as $fila) {
          echo "El pais es ".$fila['Name']."<br>";
        }
        //Cuantas filas nos devuelve
        echo "el numero de paises es: ".$resultado->num_rows."<br>";
        while($fila=$resultado->fetch_assoc()){
          //var_dump($fila);
          echo "El pais es ".$fila['Name']."<br>";
        }
      }
    }

/*Damos a una variable un valor entero*/
$var1 = 0;
/*Damos a otra un valor booleano*/
$var2 = FALSE
/*Si los comparamos con == verás como cumple el condicional, ya que tratará a ambos como booleanos*/
if($var1 == $var2){
  echo "Son iguales"
}
/*En cambio con === no entraría porque no realiza la conversión, de esta forma al tratarse de tipos distintos no entra*/
if($var1 === $var2){
  echo "Son idénticos"
}

   ?>
  </body>
</html>
