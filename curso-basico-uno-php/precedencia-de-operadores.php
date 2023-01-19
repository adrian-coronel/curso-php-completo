<?php
  /* La precedencia nos dice qué operación pasará primero y qué operación
  pasará después -> https://www.php.net/manual/es/language.operators.precedence.php*/

  $numero = 0;
  $resultado = $numero++; #Primero asigna y luego suma

  #Asociatividad
  echo 1 - (2 - 3); #Indicamos con el parentesis que pasará primero
  
  # Asociatividad izquierda
  echo 1 - 2 - 3 - 4;

  # Asociatividad derecha
  $c = 10;
  $a = $b = $c; #Comienza por la derecha
  echo $a; # 10


  $michis_4_patas = true;
  $michis_programan_con_PHP = false;

  /* Lo que pasa es que "and" tiene una precedencia de izquierda, es decir,
  que primero asigna "michi_4..." a "resultado" y luego hace la logica.
  */
  $resultado = $michis_4_patas and $michis_programan_con_PHP;
  var_dump($resultado); #true

  # Manera de resolver el problema
  $resultado = ($michis_4_patas and $michis_programan_con_PHP);
  var_dump($resultado); #false


?>