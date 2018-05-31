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
//Mostramos por pantalla el JSON
$miInfoJS=json_encode($miInfo);
echo $miInfoJS;
