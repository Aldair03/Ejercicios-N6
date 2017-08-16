<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
   <h2>Datos de Una Persona</h2>
    <?php
      $Datos = array('Pedro Torres',
                     'Calle 20',
                     '1425698',
                      );
  list($Nombre,$Direccion,$Telefono)=$Datos;

  echo "Nombre : $Nombre <br>";
  echo "Direccion : $Direccion <br>";
  echo "Telefono: $Telefono <br>";

     ?>
     </div>
  </body>
</html>
