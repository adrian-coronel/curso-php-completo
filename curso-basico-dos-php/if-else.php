<?php
  $edad = readline("Ingresa tu edad porfavor \n");

  if($edad > 18){
    echo "Tienes más de 18 años";
  } else if($edad == 18){
    echo "Tienes 18 años";
  } else{
    echo "Tienes menos de 18 años";
  }

?>