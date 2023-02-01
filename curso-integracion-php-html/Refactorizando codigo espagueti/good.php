<?php
  $tabla_del_9 = [];
  for ($i = 1; $i <= 10 ; $i++) { 
    
    $resultado = 9 * $i;
    $texto = "9 x $i = $resultado";
    array_push($tabla_del_9,$texto);

  }
  
  # die() => Esta funcion mata la página.
  # die(); #Cuando se tope con la funcion dejará de cargar.


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esto es un código Refactorizado</title>
</head>
<body>
  <h1>Tabla del 9</h1>
  <ul>
    <?php foreach($tabla_del_9 as $resultado): ?>

      <li><?= $resultado ?></li>
    
      <?php endforeach; ?>
  </ul>
</body>
</html>