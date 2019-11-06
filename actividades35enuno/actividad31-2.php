<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>opciones - encuesta</title>
  </head>
  <body>
    <?php
    $opcion31 = $_POST['op31'];
    switch ($opcion31) {
      case 1:
        echo "Tratado Libre de Comercio <br>";
        echo "1 - A Favor <p>";
        echo "2 - En Contra <p>";
        echo "3 - Indeciso <p>";
        echo "Selecciona una opción [1, 2, o 3] <br>";
    /*    switch ($voto31) {
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
            echo "Opcion mal ingresada! <br>";
            break;
        }
        if (($voto31 >= 1)&& ($voto <= 3)) {
          echo "¡Su voto se registró! <br>";
        } */
        break;
      default:
        echo "Opcion mal ingresada! <br>";
        break;
    }
     ?>
    <form action="actividad31-3.php" method="post">
      <div>
        <p><input type="text" name="V310" value="" size="10"></p>
        <p><input type="submit" name="V31" value="Ingresar"></p>
      </div>
    </form>
  </body>
</html>
