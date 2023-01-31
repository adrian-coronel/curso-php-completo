<?php

  $users = [ "Adrian","Junior","Leonardo","Edilson","Alonso" ];

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
  
  <ul>
    <h1>Ciclo For</h1>
    <?php for ($i=0 ; $i < 5 ; $i++): ?>
      <li><?= $i ?></li>
    <?php endfor; ?>
  </ul>
  
  <h1>Lista de usuarios</h1>
  <ul>
    <?php foreach($users as $username): ?>
      <li><?= $username ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>