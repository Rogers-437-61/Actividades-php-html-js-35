<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>resultados - final</title>
  </head>
  <body>
    <?php
    $favor31 = 0;
    $contra31 = 0;
    $neutro31 = 0;
    $total31;
    $voto31 = $_POST['V310'];
    $opcion31 = 0;
    $tfav = 0;
    $tcon = 0;
    $tneu = 0;
    switch ($voto31) {
          case 1:
            $favor31++;
            break;
          case 2:
            $contra31++;
            break;
          case 3:
            $neutro31++;
            break;
          default:
            echo "¡Opcion mal ingresada! <br>";
            break;
        }
    if (($voto31 >= 1)&& ($voto31 <= 3)) {
          echo "¡Su voto se registró! <br>";
        }
    echo "Porcentajes: <br>";
    while ($opcion31 != 1) {
        $total31 = $contra31 + $favor31 + $neutro31;
        if ($total31 > 0) {
          $tfav = $favor31 * 100 / $total31;
          $tcon = $contra31 * 100 / $total31;
          $tneu = $neutro31 * 100 / $total31;
          echo "A favor: $tfav <br>";
          echo "En contra: $tcon <br>";
          echo "Se abstienen de opción: $tneu <br>";
        }
        $opcion31++;
      }
    ?>
  </body>
</html>
