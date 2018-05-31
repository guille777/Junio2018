<?php
  $entrada=1;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pintar html</title>
  </head>
  <body>
    <div>
      <?php
        if($entrada==1){
          echo "<p>Estamos en la entrada 1</p>";
        }else{
          echo "<p>No estamos en la entrada 1</p>";
        }
       ?>
    </div>
    <div>
      <?php
        if($entrada==1){?>
          <p>Estamos en la entrada 1. Otra forma</p>
      <?php
        }else{
      ?>
          <p>No estamos en la entrada 1</p>
      <?php
        }
      ?>
    </div>
  </body>
</html>
