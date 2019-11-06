<!DOCTYPE html>
<?php
  // empieza captura de salida
  ob_start();
  $cantalum = $_POST['act32'];
  echo "Número de alumnos presentes: $cantalum <br>";
?>
<form action="resultado32.php" method="post">
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="check"
     name="check" onchange="javascript:mostrarInput()" />
  <label class="form-check-label" for="gridCheck"></label>
</div>
<div class="form-group col-md-6" id="content" style="display: none;">
  <input class="text" name="nam1" value="">
</div>
<div class="form-group col-md-6" id="content2" style="display: none;">
  <input class="text" name="nam2" value="">
</div>
<div class="form-group col-md-6" id="content3" style="display: none;">
  <input class="text" name="nam3" value="">
</div>
<div class="form-group col-md-6" id="content4" style="display: none;">
  <input class="text" name="nam4" value="">
</div>
<div class="form-group col-md-6" id="content5" style="display: none;">
  <input class="text" name="nam5" value="">
</div>
<div class="form-group col-md-6" id="content6" style="display: none;">
  <input class="text" name="nam6" value="">
</div>
<div class="form-group col-md-6" id="submit32" style="display: none;">
  <input type="submit" name="" value="ingresar">
</div>
</form>
<script>
function mostrarInput() {
  var jsvar = '<?php  echo $cantalum;?>';
  elemento = document.getElementById("content");
  check = document.getElementById("check");
  elemento2 = document.getElementById("content2");
  elemento3 = document.getElementById("content3");
  elemento4 = document.getElementById("content4");
  elemento5 = document.getElementById("content5");
  elemento6 = document.getElementById("content6");
  ingreso32 = document.getElementById("submit32");
  if ((check.checked) && (jsvar == 1)) {
    elemento.style.display='block';
    elemento2.style.display='none';
    elemento3.style.display='none';
    elemento4.style.display='none';
    elemento5.style.display='none';
    elemento6.style.display='none';
    ingreso32.style.display='block';
  }else if ((check.checked) && (jsvar == 2)) {
    elemento.style.display='block';
    elemento2.style.display='block';
    elemento3.style.display='none';
    elemento4.style.display='none';
    elemento5.style.display='none';
    elemento6.style.display='none';
    ingreso32.style.display='block';
  }
  else if ((check.checked) && (jsvar == 3)) {
    elemento.style.display='block';
    elemento2.style.display='block';
    elemento3.style.display='block';
    elemento4.style.display='none';
    elemento5.style.display='none';
    elemento6.style.display='none';
    ingreso32.style.display='block';
  }
  else if ((check.checked) && (jsvar == 4)) {
    elemento.style.display='block';
    elemento2.style.display='block';
    elemento3.style.display='block';
    elemento4.style.display='block';
    elemento5.style.display='none';
    elemento6.style.display='none';
    ingreso32.style.display='block';
  }
  else if ((check.checked) && (jsvar == 5)) {
    elemento.style.display='block';
    elemento2.style.display='block';
    elemento3.style.display='block';
    elemento4.style.display='block';
    elemento5.style.display='block';
    elemento6.style.display='none';
    ingreso32.style.display='block';
  }
  else if ((check.checked) && (jsvar == 6)) {
    elemento.style.display='block';
    elemento2.style.display='block';
    elemento3.style.display='block';
    elemento4.style.display='block';
    elemento5.style.display='block';
    elemento6.style.display='block';
    ingreso32.style.display='block';
  }
  else {
    elemento.style.display='none';
    elemento2.style.display='none';
    elemento3.style.display='none';
    elemento4.style.display='none';
    elemento5.style.display='none';
    elemento6.style.display='none';
    ingreso32.style.display='none';
  }
}
</script>
<?php // finalizar captura asignarlo a un var
$output = ob_get_clean();

// si convence y no hace falta mas movida, darle al echo

echo $output;
