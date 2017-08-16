<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <div class="Container">
    <h2>Nombres</h2>
    <?php
    $Datos = array( "Maria" , "Paula" , "Mirna" , "Jose" , "Sebastian" , "Carlos");
    echo $Contar=count($Datos),"<br>";
     shuffle($Datos);
     foreach ($Datos as $Dato) {
       echo $Dato,"<br>";
}
     ?>
  </div>
  </body>
</html>
