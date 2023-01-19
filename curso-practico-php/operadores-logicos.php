<?php
  
  $valorA = true;
  $valorB = true;

  $resultado = $valorA and $valorB;
  var_dump( $resultado ); #true

  # xor => Si ambos son true, no funcionará, tiene presedencia, x eso se pone entre parentesís
  $resultado2 = ($valorA xor $valorB);
  var_dump( $resultado2 );

?>