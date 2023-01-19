<?php
  # https://github.com/platzi => Todo el codigo
  $coches = ["img-coches/1.webp","img-coches/2.jpg","img-coches/3.webp","img-coches/4.webp"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Hola esto es html desde php</h1>
  <?php foreach($coches as $coche){ ?>
    <!-- Todo lo que ponga acá php lo repetirá dependiendo del foreach-->
    <img src="<?php echo $coche  ?>">
  <?php } ?>

</body>
</html>