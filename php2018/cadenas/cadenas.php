<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipos String</title>
  </head>
  <body>
    <?php
      //Definiciones de cadenas
      $nombre='Paco';
      $edad=42;
      $frase="Paco tiene $edad años";
      //NowDoc
      $textoLargo= <<<'EOT'
      Este es un ejemplo de un texto largo que se puede <br>
      incluir dentro dentro de un fichero <br>
      PHP y HTML
EOT;
      //Sacamos por pantalla
      echo "Mi nombre es ".$nombre;
      echo "<br>";
      echo $frase;
      echo "<br>";
      echo $textoLargo;
     ?>
  </body>
</html>
