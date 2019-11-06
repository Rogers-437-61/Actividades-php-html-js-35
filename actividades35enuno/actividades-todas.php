<?php
  echo "<h1 style='color:#58D68D'>Actividad 1</h1>";
  //Actividad 1
  for ($i=1; $i < 101; $i++) {
    echo "$i <br>";
  }
  echo "<br>";
  //actividad 2
  echo "<h1 style='color:#58D68D'>Actividad 2</h1>";
  for ($c=100; $c > 0; $c--) {
    echo "$c <br>";
  }
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 3</h1>";
  //Actividad 3
  for ($p=0; $p < 101; $p = $p+2) {
    echo "$p <br>";
  }
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 4</h1>";
  //Actividad 4
  for ($m=1; $m < 100; $m = $m+2) {
    echo "$m <br>";
  }
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 5</h1>";
  //Actividad 5
  $numeros20 = 0;
  for ($i=0; $i < 21; $i++) {
    $numeros20 = $numeros20 + $i;
    echo "$numeros20 <br>";
  }
  echo "<br>";
  echo "<h2 style='color:#58D68D'>Extra</h2>";
  //Extra!!
  $numerosarray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
  $a = 0;
  $aux = 0;
  while ($a < 1) {
    foreach ($numerosarray as $value) {
      $aux = $aux + $value;
      echo "$aux <br>";
    }
    $a = $a + 1;
  }
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 6</h1>";
  //actividad 6
  $numerospares = 0;
  for ($r=0; $r < 21; $r = $r+2) {
    $numerospares = $numerospares + $r;
    echo "$numerospares <br>";
  }
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 16</h1>";
  //actividad 16
  $numerosdemultiplicar = 0;
  for ($e=0; $e < 51; $e++) {
    $numerosdemultiplicar = 2 * $e;
    echo "$numerosdemultiplicar <br>";
  }
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 17</h1>";
  //actividad 17
  for ($u=0; $u < 51; $u++) {
    $numerosdemultiplicar = 3 * $u;
    echo "$numerosdemultiplicar <br>";
  }
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 19</h1>";
  //Actividad 19
  $recorrida19 = [89,36,12,10,12,91,20,33,66,25];
  $resultado19 = 0;
  for ($su=0; $su < 10; $su++) {
    echo "$recorrida19[$su] ";
    if ($su < 9) {
      echo " + ";
    }
    $resultado19 = $recorrida19[$su] + $resultado19;
  }
  echo "<br>";
  echo "El resultado es: $resultado19";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 20</h1>";
  //Actividad 20
  $promedio20 = [8,8,8,8,8,8,7,7,10,6.5];// molina gabriela ortiz
  $promedioresut = 0;
  $sumapromedio20 = 0;
  for ($su20=0; $su20 < 10; $su20++) {
    echo "$promedio20[$su20]";
    if ($su20 < 9) {
      echo " + ";
    }
    $sumapromedio20 = $promedio20[$su20] + $sumapromedio20;
  }
  echo "<br>";
  echo "Suma total de las notas: $sumapromedio20 <br>";
  $promedioresut = $sumapromedio20 / 10;
  echo "Promedio: $promedioresut <br>";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 21</h1>";
  //Actividad 21
  $recorrido21 = [12,1,5,3,9,20,35,15,14,8,-4,4,8,90,65,68,8];
  foreach ($recorrido21 as $value) {
    if ($value > 10) {
      echo "$value es mayor a 10 <br>";
    }
  }
  echo "Lectura finalizada";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 22</h1>";
  //Actividad 22
  $varcant22 = [3670,5680,10,6731,184,94,656,839,758,1253];
  $cantpares = 0;
  echo "Números seleccionados y leídos: <p> $varcant22[0] <br> $varcant22[1] <br> $varcant22[2] <br> $varcant22[3] <br> $varcant22[4] <br> $varcant22[5] <br>  $varcant22[6] <br> $varcant22[7] <br> $varcant22[8] <br> $varcant22[9] </P>";
  echo "Lista: <br>";
  foreach ($varcant22 as $value22) {
    $cantpares = $value22 % 2;
    if ($cantpares==0) {
      echo "$value22 <br>";
    }
  }
  echo "Fin de la activ.22 <br>";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 23</h1>";
  //Actividad 23
  echo "Números seleccionados y leídos: <p> $recorrido21[0] <br> $recorrido21[1] <br> $recorrido21[2] <br> $recorrido21[3] <br> $recorrido21[4] <br> $recorrido21[5] <br>  $recorrido21[6] <br> $recorrido21[7] <br> $recorrido21[8] <br> $recorrido21[9] </P>";
  $cantmul3 = 0;
  echo "Lista de números múltiplos de 3: <br>";
  for ($v=0; $v < 10; $v++) {
    $cantmul3 = $recorrido21[$v] % 3;
    if ($cantmul3 == 0) {
      echo "$recorrido21[$v] <br>";
    }else {
      //echo "¡No es multiplo de 3! <br>";
    }
  }
  echo "Fin de la activ.23 <br>";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 24</h1>";
  //Actividad 24
  $alumnoN = [15,15,18];
  $promedioF24 = 0;
  echo "Alumno: <p> Cariapaza Curro, Carlos Daniel </p>";
  echo "Promedio: <br>";
  foreach ($alumnoN as $value24) {
    echo "$value24 <br>";
    $promedioF24 = ($promedioF24 + $value24);
  }
  if ($promedioF24 != 0) {
    $promedioF24 = $promedioF24 / 3;
  }
  echo "Promedio final: $promedioF24 <br>";
  echo "Fin de la activ.24 <br>";
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 27</h1>";
  //Actividad 27
  $seleccionados27 = [-300,12,61,78,23,-44,81,-77,74,-90];
  $NP = 0;
  $recorrer27 = 0;
  echo "Numeros agregados y leídos: <p>";
  while ($NP < 10) {
    echo "$seleccionados27[$NP] <br>";
    $NP= $NP+1;
  }
  echo "<p> Los números positivos son: </p>";
  while ($recorrer27 < 10) {
    if ($seleccionados27[$recorrer27] > 0) {
      echo "$seleccionados27[$recorrer27] <br>";
    }
    $recorrer27= $recorrer27+1;
  }
  echo "<br>";
  echo "<br>";
  echo "<h1 style='color:#58D68D'>Actividad 28</h1>";
  //Actividad 28
  echo "<p>Actividad 28</p>";
  $recorridaveinte28 = [-11,5,33,27,-89,29,-37,1,-66,-102,245,256,398,-197,240,460,-3092,129034,-12942,8];
  $cantposit = 0;
  $cantnegat = 0;
  echo "<p>Informe de números positivos:</p>";
  foreach ($recorridaveinte28 as $value28) {
    if ($value28 > 0) {
      $cantposit = $cantposit + 1;
    }
  }
  echo "<p>$cantposit</p>";
  echo "<p>Informe de números negativos:</p>";
  foreach ($recorridaveinte28 as $value28_2) {
    if ($value28_2 < 0) {
      $cantnegat = $cantnegat + 1;
    }
  }
  echo "<p>$cantnegat<p>";
  echo "<br>";
  echo "<br>";
  //Actividad test 29
  /*$negativo = -89;
  echo "Numero a pasar: $negativo <br>";
  $conversor = $negativo * -1;
  echo "Resultado: $conversor <br>";
  $conversor2 = abs($negativo);
  echo "Resultado: $conversor2 <br>";
  */
  echo "<h1 style='color:#58D68D'>Actividad 29</h1>";
  //Actividad 29
  $negativos29 = [-35,-347,-48,-239,-234589,-1234,-109,-1245,-579,-1452,-186,-4875,-1234,-999,-100];
  for ($n=0; $n < 15; $n++) {
    echo "Numeros a conversar: $negativos29[$n] <br>";
  }

  echo "Números convertidos: <br>";
  $positivos = 0;

  foreach ($negativos29 as $value) {
    $positivos = abs($value);
    echo "$positivos <br>";
  }
 ?>

<!DOCTYPE actividad 7 html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--title>Números positivos</title-->
  </head>
  <body>
    <form action="#" method="post">
      <h1 style='color:#58D68D'>Actividad 7</h1>
      <h2>Números postivos</h2>
      <h3>Escriba cualquier número entero (máximo 4 cifras).</h3>
      <p><input type="text" name="NP1" value="" size="4"></p>
      <p><input type="submit"value="Validar"></p>
    </form>
    <?php
      $numseleccpos = $_POST['NP1'];
      if ($numseleccpos <= 0) {
        echo "¡Ingreso no válido!";
      } else {
        echo "El número ingresado, $numseleccpos ¡es positivo! <p> ¡Válido! </p>";
      }

    ?>
  </body>
</html>

<!DOCTYPE actividad 8 html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--title>Números positivos</title-->
  </head>
  <body>
    <form action="#" method="post">
      <h1 style='color:#58D68D'>Actividad 8</h1>
      <h2>¡Más números!</h2>
      <h3>Escriba cualquier número entero (máximo 3 cifras).</h3>
      <p><input type="text" name="N10" value="" size="3"></p>
      <p><input type="submit"value="Ingresar"></p>
    </form>
    <?php
      $numselecc2 = $_POST['N10'];
      if ($numselecc2 > 1 && $numselecc2 < 10) {
        echo "El número ingresado, $numselecc2 ¡es positivo! <p> ¡Válido! </p>";
      } else {
        echo "¡Ingreso no válido!";
      }
    ?>
  </body>
</html>

<!DOCTYPE actividad 9 html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--title>Números positivos</title-->
  </head>
  <body>
    <form action="#" method="post">
      <h1 style='color:#58D68D'>Actividad 9</h1>
      <h2>¡Más números! X2</h2>
      <h3>Escriba cualquier número entero.</h3>
      <p><input type="text" name="N11" value="" size="3"></p>
      <p><input type="submit"value="Ingresar"></p>
    </form>
    <?php
      $numselecc3 = $_POST['N11'];
      /*
      if ($numselecc3 < 2) {
        echo "El número ingresado, $numselecc3 ¡es positivo! <p> ¡Número menor a 2! </p>";
      } else {
        echo "¡Ingreso no válido!¡No es menor a 2! <br>";
      }
      if ($numselecc3 > 10) {
        echo "El número ingresado, $numselecc3 ¡es positivo! <p> ¡Número mayor a 10! </p>";
      } else {
        echo "¡Ingreso no válido!¡No es mayor a 10! <br>";
      } */
      if (($numselecc3 < 2) || ($numselecc3 > 10)) {
        echo "Número valido! <br> Numero: $numselecc3";
      }else {
        echo "Número invalido!";
      }
    ?>
  </body>
</html>

<!DOCTYPE Actividad 10html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#####" method="post">
      <h1 style='color:#58D68D'>Actividad 10</h1>
      <h2>Mas numeros #0?</h2>
      <h3>Inserta cualquier numero; si ese numero es mayor, aparecera en la pantalla.</h3>
      <p></p>
      <input type="number" name="act101" value="25" size="5">
      <p><input type="number" name="act10" value="" size="5"></p>
      <p><input type="submit" value="Validar"></p>
    </form>
    <?php
      $actividad10 = $_POST['act10'];
      $leido = $_POST['act101'];
      echo "Número leído x primera vez: <br>";
      echo "$leido <br>";
      if ($actividad10 > $leido) {
        echo "¡$actividad10 es mayor a $leido! <br>";
      }elseif ($actividad10 < $leido) {
        echo "El valor que ingresaste es menor a $leido <br>";
      }else  {
        echo "numero invalido <br>";
      }
     ?>
  </body>
</html>

<!DOCTYPE Actividad 11html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="##" method="post">
      <h1 style='color:#58D68D'>Actividad 11</h1>
      <h2>Ascendente y descendente #1</h2>
      <h3>Ingresa cualquier número entero.</h3>
      <p><input type="number" name="A11" value="" size="3"></p>
      <p><input type="number" name="A110" value="" size="3"></p>
      <p><input type="submit"value="Ingresar"></p>
    </form>
    <?php
      $numeros11=$_POST['A11'];
      $numeros110=$_POST['A110'];
      if ($numeros11 < $numeros110) {
        echo "<p>$numeros11 </p>";
        echo "<p>$numeros110</p>";
      }elseif ($numeros110 < $numeros11) {
        echo "<p>$numeros110</p>";
        echo "<p>$numeros11</p>";
      }else {
        echo "¡Numeros no ingresados o no validos!";
      }
     ?>
  </body>
</html>

<!DOCTYPE Actividad 12html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="#-#" method="post">
      <h2>Actividad 12</h2>
      <h3>Inserta 2 números cualquiera; una vez hecho, presione "enviar" para ordenar los números ingresados.</h3>
      <p><input type="number" name="IP12" value="" size="5"></p>
      <p><input type="number" name="IP121" value="" size="5"></p>
      <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
      $varactividad12 = $_POST['IP12'];
      $varactividad12_2 = $_POST['IP121'];
      if (isset($varactividad12) && isset($varactividad12_2)) {
        if ($varactividad12 > $varactividad12_2) {
          echo "¡ $varactividad12 es mayor a $varactividad12_2 ! <br>";
          echo "Lista:";
          echo "<p> $varactividad12 </p>";
          echo "$varactividad12_2 <br>";
        }elseif ($varactividad12_2 > $varactividad12) {
          echo "¡ $varactividad12_2 es mayor a $varactividad12 ! <br>";
          echo "Lista:";
          echo "<p> $varactividad12_2 </p>";
          echo "$varactividad12 <br>";
        }else {
          echo "<p>¡Números con igual valor!</p>";
        }
      }else {
        echo "No insertaste ningun valor. <br>";
      }
     ?>
  </body>
</html>

<!DOCTYPE Actividad 13html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 style='color:#58D68D'>Actividad 13</h1>
    <h2>Numeros impares</h2>
    <h3>Coloque cualquier numero en las casillas.</h3>
    <form action="########" method="post">
      <p><input type="number" name="I00" value="" size="10"></p>
      <p><input type="number" name="I01" value="" size="10"></p>
      <p><input type="submit" value="ingresar"></p>
    </form>
    <?php
      $impar0 = $_POST['I00'];
      $impar1 = $_POST['I01'];
      $revision0 = $impar0 % 2;
      $revision1 = $impar1 % 2;

    if(( isset($impar0) )&&( isset($impar1) )&&( isset($revision0) )&&( isset($revision1) )){
      if ($revision0== 0) {
        echo "¡$impar0 es par! ¡Reintente de nuevo! <br>";
      }else {
        echo "<p> ¡$impar0 es impar! </p>";
      }
      if ($revision1== 0) {
        echo "¡$impar1 es par! ¡Reintente de nuevo! <br>";
      }else {
        echo "<p> ¡$impar1 es impar! </p>";
      }

/*
      if (($impar0 > $impar1)&&($revision0 != 0)&&($revision1 != 0)) {
        echo "$impar0";
        echo "$impar1";
      }else {
        echo "El ingreso contiene uno o más números pares. <br>";
      }
      if (($impar1 > $impar0)&&($revision0 != 0)&&($revision1 != 0)) {
        echo "$impar1 <br>";
        echo "$impar0 <br>";
      }else {
        echo "El ingreso contiene uno o más números pares. <br>";
      }
*/
    if (($impar0 > $impar1)&&($revision0 != 0)&&($revision1 != 0)) {
      echo "$impar0 <br>";
      echo "$impar1 <br>";
    }elseif (($impar1 > $impar0)&&($revision0 != 0)&&($revision1 != 0)) {
      echo "$impar1 <br>";
      echo "$impar0 <br>";
    }else {
      echo "El ingreso contiene uno o más números pares. <br>";
    }

    }else {
    }
     ?>
  </body>
</html>

<!DOCTYPE actividad 14html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="######" method="post">
      <h1 style='color:#58D68D'>Actividad 14</h1>
      <h1>¡Asteriscos!</h1>
      <h2>Inserta cualquier número; Aparecerá aparte los asteriscos pedidos.</h2>
    <p><input type="number" name="a14" value="" size="10"></p>
    <p><input type="submit" value="Crear asteriscos"></p>
    </form>
    <?php
      $asteriscos14=$_POST['a14'];
      echo "Asteriscos pedidos: $asteriscos14 <br>";
      for ($i=0; $i < $asteriscos14; $i++) {
        echo "*<br>";
      }
    ?>
  </body>
</html>

<!DOCTYPE actividad 15html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="######" method="post">
      <h1 style='color:#58D68D'>Actividad 15</h1>
      <h1>¡Asteriscos! x2</h1>
      <h2>Inserta cualquier número; Aparecerá aparte los asteriscos uno al lado de otro.</h2>
    <p><input type="number" name="a15" value="" size="10"></p>
    <p><input type="submit" value="Crear nuevos asteriscos"></p>
    </form>
    <?php
      $asteriscos15=$_POST['a15'];
      echo "Asteriscos pedidos: $asteriscos15 <br>";
      for ($i=0; $i < $asteriscos15; $i++) {
        echo " * ";
      }
    ?>
  </body>
</html>

<!DOCTYPE actividad 18 html>
<html>
  <head>
    <title>pequeña tabla</title>
  </head>
  <body>
    <form action="#" method="post">
      <h1 style='color:#58D68D'>Actividad 18</h1>
      <h3>Tabla</h3>
      <h4>Escribe un número entero para ver su tabla del 1 a 10.</h4>
      <p><input type="text" name="T10" size="10" value=""></p>
      <p><input type="submit" name="VV1" value="Ver tabla"></p>
    </form>
    <?php
      $numselecc = $_POST['T10'];
        echo "<h5>Tabla del $numselecc: <h5>";
        $mul=1;
        while ($mul <= 10) {
          echo "$numselecc x $mul = ".$numselecc*$mul."<br>";
          $mul++;
        }
     ?>
  </body>
</html>

<!DOCTYPE Actividad25html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="###" method="post">
      <h1 style='color:#58D68D'>Actividad 25</h1>
      <h2>¿Algoritmos?</h2>
      <h3>¿5 x 1 ? ¿2 x 2? ¿4 + 1?</h3>
      <p><input type="number" name="alg01" value="" size="10"></p>
      <p><input type="submit" name="env" value="Enviar"></p>
    </form>
    <?php
      $algoritmo25 = $_POST['alg01'];
      if (isset($algoritmo25)) {
        echo "EN PROCESO... <br>";
        if (($algoritmo25 <6)&&($algoritmo25 > 0)) {
          echo "¡Proceso finalizado! <br>";
        }else {
          echo "Numero incorrecto. <br> ¡El proceso se interrumpió! <br>";
        }
      }else {
        echo "Numero no ingresado; Esperando un numero...<br>";
      }
     ?>
  </body>
</html>

<!DOCTYPE Actividad26html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="##?##" method="post">
      <h1 style='color:#58D68D'>Actividad 26</h1>
      <h2>Contraseña</h2>
      <h3>Ingrese la contraseña, que te haya dado el programador.</h3>
      <p><input type="text" name="contr01" value="" size="20"></p>
      <p><input type="submit" name="env" value="Ingresar"></p>
    </form>
    <?php
      $contraseña26 = $_POST['contr01'];
      $contraseñareal = "234SDfkl";
      if (isset($contraseña26)) {
        if (($contraseña26 == "234SDfkl") && ($contraseñareal == $contraseña26)) {
          echo "¡Te doy la bienvenida a mi tienda! ¡Caminante! <br>";
        }else {
          echo "Contraseña incorrecta. <br> Intente ingresar la contraseña de nuevo. <br>";
        }
      }else {
        echo "¡La casilla del ingreso no contiene nada! <br> ¡Reintente de nuevo! <br>";
      }
     ?>
  </body>
</html>

<!DOCTYPE Actividad 30html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="##resultado30##" method="post">
      <h1 style='color:#58D68D'>Actividad 30</h1>
      <h2>Calculo del salario semanal de obreros</h2>
      <h3>Ingresa cuantas horas hizo el trabajador:</h3>
      <p><input type="number" name="op30" value="" size="10"></p>
      <p><input type="submit" name="env2" value="Ingresar"></p>
    </form>
    <?php
      $cantobrero = $_POST['op30'];
      if (isset($cantobrero)) {
      if ($cantobrero <= 40) {
        $horamenos = $cantobrero * 15;
        echo "Horas trabajadas: $cantobrero <br>";
        echo "Monto a pagar: $horamenos <br>";
      }elseif ($cantobrero > 40) {
        $primhoras = 5 * 15;
        $salariobase = 40*15;
        $horaextra = $cantobrero - 40;
        $totextra = $horaextra * 25;
        $tot32 = $totextra + $primhoras + $salariobase;
        echo "Horas trabajadas: $cantobrero <br>";
        echo "Extra laboradas: $horaextra <br>";
        echo "Monto total a pagar: $tot32 <br>";
      }
    }else {

    }
     ?>
  </body>
</html>

<!DOCTYPE Actividad 31html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="actividad31-2.php" method="post">
      <h1 style='color:#58D68D'>Actividad 31</h1>
      <p>Encuesta : Tratado de Libre Comercio</p>
      <p>Ingresa un voto con opcion 1.</p>
      <input type="text" name="op31" value="" size="10">
      <input type="submit" name="env2" value="Ingresar">
    </form>
  </body>
</html>

<!DOCTYPE Actividad 32html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="actividad32.php" method="post">
      <h1 style='color:#58D68D'>Actividad 32</h1>
      <h1>Alumnos en clase</h1>
      <h2>Ingresa el total de alumnos presentes (maximo 6 alumnos.)</h2>
      <p><input type="number" name="act32" value=""></p>
      <p><input type="submit" name="" value="ingresar"></p>
    </form>
  </body>
</html>

<!DOCTYPE Actividad 33html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--scribd.com/doc/134441664-->
  </head>
  <body>
    <form action="actividad330.php" method="post">
      <h1 style='color:#58D68D'>Actividad 33</h1>
      <h2>Compañia de seguros</h2>
      <h3>¿Ingrese la cantidad de vendedores?</h3>
      <p><input type="number" name="nven33" value=""></p>
      <h3>¿Cuál es el sueldo de base de los empleados?</h3>
      <p><input type="number" name="sbase33" value=""></p>
      <h3>ingrese el valor de la primera venta:</h3>
      <p><input type="number" name="v133" value=""></p>
      <h3>ingrese el valor de la segunda venta:</h3>
      <p><input type="number" name="v233" value=""></p>
      <h3>ingrese el valor de la tercera venta:</h3>
      <p><input type="number" name="v333" value=""></p>
      <p><input type="submit" name="env33" value="Continuar"></p>
    </form>
  </body>
</html>

<!DOCTYPE Actividad 34html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#34#" method="post">
      <h1 style='color:#58D68D'>Actividad 34</h1>
    <h2>Programa N numeros</h2>
    <h3>Ingresa en las siguientes casillas los siguientes números.</h3>
      <p><input type="number" name="s3401" value="" size="10"></p>
      <p><input type="number" name="s3402" value="" size="10"></p>
      <p><input type="number" name="s3403" value="" size="10"></p>
      <p><input type="number" name="s3404" value="" size="10"></p>
      <p><input type="number" name="s3405" value="" size="10"></p>
      <p><input type="submit" name="34I" value="ingresar"></p>
    </form>
    <?php
      $nnum1 = $_POST['s3401'];
      $nnum2 = $_POST['s3402'];
      $nnum3 = $_POST['s3403'];
      $nnum4 = $_POST['s3404'];
      $nnum5 = $_POST['s3405'];
      $pro34 = 0;
      $sum34 = 0;

    if (isset($nnum1)&&isset($nnum2)&&isset($nnum3)&&isset($nnum4)&&isset($nnum5)) {

      if (($nnum1 > $nnum2)&&($nnum1 > $nnum3)&&($nnum1 > $nnum4)&&($nnum1 > $nnum5)) {
        echo "El número mayor a todos es: $nnum1 <br>";
      }elseif (($nnum2 > $nnum1)&&($nnum2>$nnum3)&&($nnum2>$nnum4)&&($nnum2>$nnum5)) {
        echo "El número mayor a todos es: $nnum2 <br>";
      }elseif (($nnum3 >$nnum1)&&($nnum3>$nnum2)&&($nnum3>$nnum4)&&($nnum3>$nnum5)) {
        echo "El número mayor a todos es: $nnum3 <br>";
      }elseif (($nnum4>$nnum1)&&($nnum4>$nnum2)&&($nnum4>$nnum3)&&($nnum4>$nnum5)) {
        echo "El número mayor a todos es: $nnum4 <br>";
      }elseif (($nnum5>$nnum1)&&($nnum5>$nnum2)&&($nnum5>$nnum3)&&($nnum5>$nnum4)) {
        echo "El número mayor a todos es: $nnum5 <br>";
      }else {
        echo "string";
      }
      if (($nnum1 < $nnum2)&&($nnum1 < $nnum3)&&($nnum1 < $nnum4)&&($nnum1 < $nnum5)) {
        echo "El número menor a todos es: $nnum1 <br>";
      }elseif (($nnum2 < $nnum1)&&($nnum2<$nnum3)&&($nnum2<$nnum4)&&($nnum2<$nnum5)) {
        echo "El número mayor a todos es: $nnum2 <br>";
      }elseif (($nnum3 <$nnum1)&&($nnum3<$nnum2)&&($nnum3<$nnum4)&&($nnum3<$nnum5)) {
        echo "El número mayor a todos es: $nnum3 <br>";
      }elseif (($nnum4<$nnum1)&&($nnum4<$nnum2)&&($nnum4<$nnum3)&&($nnum4<$nnum5)) {
        echo "El número mayor a todos es: $nnum4 <br>";
      }elseif (($nnum5<$nnum1)&&($nnum5<$nnum2)&&($nnum5<$nnum3)&&($nnum5<$nnum4)) {
        echo "El número mayor a todos es: $nnum5 <br>";
      }else {
        echo "string";
      }
      echo "<p> SUMA TOTAL: </p>";
      $sum34 = $nnum1 + $nnum2 + $nnum3 + $nnum4 + $nnum5;
      echo "$sum34 <br>";
      echo "<p> PROMEDIO TOTAL: </p>";
      $pro34 = $sum34 / 5;
      echo "$pro34 <br>";
    }else {
      echo "Error <br>";
    }
     ?>
  </body>
</html>

<!DOCTYPE actividad 35 final html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="##" method="post">
      <h1 style='color:#58D68D'>Actividad 35</h1>
      <h2>Demostración de Potencias</h2>
      <h3>Inserte una base (entre 1 a 5), junto con el exponente (de 1 a 4).</h3>
      <p><input type="text" name='P1' value="base" size="1"></p>
      <p><input type="text" name='P2' value="expo" size="1"></p>
      <p><input type="submit" name="F35" value="Potenciar"></p>
    </form>
    <?php
      $base1 = $_POST['P1'];
      $potenciador1 = $_POST['P2'];
      echo "Base: $base1 <br>";
      echo "Exponente: $potenciador1 <br>";
      echo (pow($base1,$potenciador1) . "<br>");
      /*if (  ) {
        //$resumen = pow($base1,$potenciador1);
        //echo "$resumen <br>";
        echo (pow($base1,$potenciador1) . "<br>");
      }*/
      while (($potenciador1 > 5 && $potenciador1 <= 0) && ( $base1 < 0 && $base1 > 6)) {
        echo (pow($base1,$potenciador1) . "<br>");
      }
     ?>
  </body>
</html>
