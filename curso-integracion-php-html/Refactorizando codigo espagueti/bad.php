<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código espagueti</title>
</head>
<body>

  <h1>Tabla del 9</h1>
  <ul>
    <?php 
      for ($i=0; $i < 10; $i++) { 
        # No esta bien escribir HTML con echo
        echo "<li>"."9 x 1 = ". (9 * ($i +1)). "</li>";
      }
    
    ?>
  </ul>

</body>
</html>