<?php

  #print_r( $_REQUEST ); #Recibe lo que envia el usuario como un array
  echo "<br>";
  $palabras = ["sol","luna","cielo","lluvia","mar"];
  
  for ($i=0; $i < count($palabras); $i++) { 
    if($_REQUEST["palabra$i"] == $palabras[$i]){
      echo "La palabra ingresada es correcta ✔️"."<br>";
    } else{
      echo "La palabra ingresa es incorrecta ❌, la palabra correcta es: ". $palabras[$i]."<br>";
    }
  }

  


?>