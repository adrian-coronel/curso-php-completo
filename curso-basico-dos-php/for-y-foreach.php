<?php

  # FOR
  for( $i = 0 ; $i < 10 ; $i++){
    echo $i ."\n";
  }

  for ($i = 0, $j = 0; $i < 10 ; $i++, $j += 2) { 
    echo "i: $i, j: $j \n";
  }


  # FOREACH
  $numerosArray = [ 4, 3, 7, 34 , 7];
  foreach( $numerosArray as $numero){ # ARRAY as VARIABLE ITERADORA
    echo "Numero: $numero \n";
  }

  $tienda_cafe = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 24.4,
    "Mocca" => 24 
  ];

  foreach( $tienda_cafe as $price ){ # mostramos los valores
    echo "Los precio de cafe son: $price \n";
  } 

  foreach( $tienda_cafe as $cafe => $precio ){ # Mostramos subindices y valores
    if( $precio > 24 ){
      echo "SE EJECUTARA UN BREAK";
      break;
    }
    echo "El cafe: $cafe tiene un precio de: $precio \n";
  }
?>