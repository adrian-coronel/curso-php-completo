<?php
  /*
    El reto consistirá en que un streamer va a querer retirar sus danaciones, sin embargo,
    solo se puede retirar a partir de los 100 dolares, entonces dependiendo de esto, dejaremos
    retirar dinero al streamer.
  */ 

  $cantidad_acumulada = 800; # cuanto credito tiene
  $cantidad_a_retirar = readline("¿Cuánto desea retirar?: \n");

  if($cantidad_acumulada >= 100){
    $cantidad_acumulada -= $cantidad_a_retirar;
    echo "Se retiraron $cantidad_a_retirar adecuadamente \n";
  } else{
    echo "No se pudo retirar ya que el crédito actual es menor a $100.00 \n";
  }
  echo "Crédito actual: $cantidad_acumulada";
?>