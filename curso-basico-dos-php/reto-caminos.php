<?php

  // 2 -> 1
  // 3 -> 2
  // 4 -> 3
  // 5 -> 5 
  // 6 -> 8
  // 7 -> 13
  // 8 -> 21

  $tiendaFinal = readline("Escoja la tienda a la que quiere ir");
  $anterior = 0;  
  $actual = 1;
  for( $i = 2 ; $i <= $tiendaFinal ; $i++ ){
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

  }

  echo "\n Hay $actual formas distintas formas de llegar a la tienda $tiendaFinal";





?>