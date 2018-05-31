<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Codificar array</title>
  </head>
  <body>
    <?php
    //Generamos un array que codificaremos posteriormente
    $miInfo=[
      'nombre'=>'Paco',
      'edad'=>42,
      'modulos'=>[
        'DAW'=>['Programacion','Desarrollo Servidor'],
        'DAM'=>['Entornos']
      ]
    ];
    //Mostramos por pantalla el array
    print_r($miInfo);
    //Mostramos por pantalla el JSON
    $miInfoJS=json_encode($miInfo);
    echo $miInfoJS;
    ?>
  </body>
</html>
