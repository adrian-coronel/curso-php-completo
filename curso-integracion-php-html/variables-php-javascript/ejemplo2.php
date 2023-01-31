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
  let users = JSON.parse('<?= json_encode($users) ?>');

</script>

  <script src="./index.js"></script>
</body>
</html>