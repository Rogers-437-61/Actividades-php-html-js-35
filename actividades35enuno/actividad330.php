<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
  </head>
  <body>
    <?php
    $posnven = $_POST['nven33'];
    $possbase = $_POST['sbase33'];
    $posv1 = $_POST['v133'];
    $posv2 = $_POST['v233'];
    $posv3 = $_POST['v333'];
    if (($posnven != 0)&&($possbase != 0)) {
      $conv1 = $posv1 * 0.10;
      $conv2 = $posv2 * 0.10;
      $conv3 = $posv3 * 0.10;
      $stot33 = $posv1 + $posv2 + $posv3 + $conv1 + $conv2 + $conv3 + $possbase;
      $totcom33 = $conv1 + $conv2 + $conv3;
      $tvent = $conv1 + $conv2 + $conv3 + $totcom33;
      echo "El sueldo total de este empleado es: $stot33 <br>";
      echo "El valor total por comisiones es de: $totcom33 <br>";
      echo "El valor total de comisiones y ventas es de: $tvent <br>";
    }else {
      echo "<h3>¡No hay vendedores y no hay sueldo establecido!</h3>";
    }
     ?>
  </body>
</html>
