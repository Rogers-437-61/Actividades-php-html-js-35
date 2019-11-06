<?php
$Nalum01 = $_POST['nam1'];
$Nalum02 = $_POST['nam2'];
$Nalum03 = $_POST['nam3'];
$Nalum04 = $_POST['nam4'];
$Nalum05 = $_POST['nam5'];
$Nalum06 = $_POST['nam6'];
if ((isset($Nalum01))&&(isset($Nalum02))&&(isset($Nalum03))&&(isset($Nalum04))&&(isset($Nalum05))&&(isset($Nalum06))) {
  echo "Alumnos presentes: <p> $Nalum01 <br> $Nalum02 <br> $Nalum03 <br> $Nalum04 <br> $Nalum05 <br> $Nalum06 </p>";
}else {
  echo "¡No mencionaste ningún alumno! <br>";
}
 ?>
