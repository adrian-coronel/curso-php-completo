<?php

  # DISTRIBUIR LOS JUGUETES DE LOS ESTUDIANTES
  $edades = [ 2,4,2,5,null,4,9,6,null,7,10,12,6];

  foreach($edades as $edad){
    if($edad < 5 && $edad != null){
      echo "El estudiante con $edad años tendrá sus juguetes en la parte inferior de la bodega.";
    } else if($edad >= 5 && $edad <= 7) {
      echo "El estudiante con $edad años tendrá sus juguetes en la parte media de la bodega.";
    } else if($edad > 7){
      echo "En estudiante con $edad años tendrá sus juguetes en la parte alta de la bodega.";
    } else{
      echo "El estudiante tendra un espacio en el alnacen al lado de la bodega.";
    } 
    echo "\n";
  }


  # MEDIO ÁRBOL DE NAVIDAD
  $altura = readline("Ingrese la edad del arbol: ");
  
  $i = 0;
  while($i < $altura){
    $j = 0;
    while($j <= $i){
      echo "*";
      $j++;
    }
    echo "\n";
    $i++;
  }

  echo "\n"; echo "\n";
  
  # FORMA MÁS CORTA
  for($i = 0 ; $i <= $altura ; $i++ ){
    echo str_repeat("*", $i) ."\n";
  }


?>