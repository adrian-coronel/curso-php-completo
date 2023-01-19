<?php
  $michis_felinos = true;
  $michis_4_patas = true;
  $michis_vuelan = false;
  $michis_programan_con_PHP = false;

  # AND
  var_dump($michis_felinos && $michis_4_patas); #true and true => true

  # OR
  var_dump($michis_felinos || $michis_vuelan); # true or false => true

  # NOT
  var_dump(!$michis_4_patas); # !true => false

  #Ejercicio 
  $resultado = $michis_4_patas and $michis_programan_con_PHP;
  var_dump($resultado); # TRUE -> se explica en PRECEDENCIA-DE-OPERADORES

?>