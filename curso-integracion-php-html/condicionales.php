<?php 

  $adrianEsMayor = true;



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>
<body>
  
  <!-- ESTO NO SE DEBE DE HACER -->
  <?php if ($adrianEsMayor){ 
    echo "<p>Esta condicinonal es verdadera</p>";
  }  else{
    echo "<p>Esto es falso</p>";
  }
  ?>

  <!-- ESTO ES ACEPTABLE -->
  <?php if ($adrianEsMayor){ ?>
    <p>Adrian es mayor de edad</p>
  <?php }else {?>
    <p>Adrian es menor de edad</p>
  <?php } ?>


  <!-- ESTO SI ESTA MUY BIEN -->
  <?php if($adrianEsMayor): ?>
    <p>Adrian es mayor de edad</p>

  <?php else: ?>
    <p>Adrian es menor de edad</p>

  <?php endif;?>
  
</body>
</html>