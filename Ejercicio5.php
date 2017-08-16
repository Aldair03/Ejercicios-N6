<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Resultados del 1 al 10</h2>
      <?php
          $Datos= array(1,2,3,4,5,6,7,8,9,10);
          list($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10)=$Datos ;
          $Multiplicacion=1;
          $Divicion=1;
          $Suma=$n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10;
          echo "Suma : $Suma<br>";
          $Resta=$n1-$n2-$n3-$n4-$n5-$n6-$n7-$n8-$n9-$n10;
          echo "Resta : $Resta<br>";
          $Multiplicacion=$n1*$n2*$n3*$n4*$n5*$n6*$n7*$n8*$n9*$n10;
          echo "Multiplicacion : $Multiplicacion<br>";
          $Divicion=$n1/$n2/$n3/$n4/$n5/$n6/$n7/$n8/$n9/$n10;
          echo "Divicion : $Divicion<br>";




       ?>

    </div>

  </body>
</html>
