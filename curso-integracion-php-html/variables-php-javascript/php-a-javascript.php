<?php

  $users = array(
    array(
      "id" => 0,
      "username" => "Adrian"
    ),
    array(
      "id" => 1,
      "username" => "Junior"
    ),
    array(
      "id" => 2,
      "username" => "Leonardo"
    ),
    array(
      "id" => 3,
      "username" => "Edilson"
    ),
    array(
      "id" => 4,
      "username" => "Alonso"
    ),
  );



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasar variables de php a javascript</title>
</head>
<body>

<script>
  /*Los valores se otorgan en el servidor, y al momento en que le toca ejecutarse a javascript
  no se entera que php le otorgo todos los datos como se observa adelante*/

  // Convierte un json en formato string a JSON
  let users = JSON.parse('<?= json_encode($users) ?>'); // json_encode(de php) convierte un array a json en string
  console.log(users);

</script>
  
</body>
</html>