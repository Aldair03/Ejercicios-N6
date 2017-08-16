<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Orden Ascendente</h2>
      <?php
         $Datos = array( 1,2,3,4,5,6,7,8,9,10);
         list($N1,$N2,$N3,$N4,$N5,$N6,$N7,$N8,$N9,$N10)=$Datos;
        sort($Datos);
        foreach ($Datos as $Dato) {
    echo  $Dato,"<br>";
}

      ?>
     </div>
  </body>
</html>
