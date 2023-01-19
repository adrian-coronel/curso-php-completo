<?php
  $a = 5;
  $b = 5;
  $c = 20;
  $d = 200;
  
  # == -> Igual
  var_dump(  $a == $b  ); #true
  var_dump(  $a == "5"  ); #true -> No compará el tipo

  # === -> Idéntico
  var_dump(  $a === $b  ); #true
  var_dump(  $a === "5"  ); #false -> Porque compará el tipo de dato

  # != -> Diferente
  var_dump(  $a != $b  ); #false
  var_dump(  $a != "5"  ); #false -> No compará el tipo

  # !== -> Diferente
  var_dump(  $a !== $b  ); #false
  var_dump(  $a !== "5"  ); #true -> Porque compará el tipo de dato

  # <  -> Menor que
  var_dump(  $a < $c  ); #true

  # > -> Mayor que
  var_dump( $d > $c); #true

  # <= -> Menor o igual

  # >= -> Mayor o igual

  # <=> -> NAVE ESPACIAL
  echo 2 <=> 3; # -1
  echo 2 <=> 1; # 1
  echo 2 <=> 2; # 0
  //Si el número de la izquierda es MENOR que el de la derecha return -1
  //Si el número de la izquierda es MAYOR que el de la derecha return 1
  //Si el número de la izquierda es IGUAL que el de la derecha return 0

  echo "\n";

  # ?? -> FUNSIÓN DE NULL
  $edadAdri = 19;
  echo $edadJun ?? $edadJuan ?? $edadAdri; # 19
  echo $edadLeo ?? $edadAdri; #Si "edadLeo" no esta definida USA "edadAdri"

?>