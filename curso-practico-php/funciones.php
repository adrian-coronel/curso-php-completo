<?php

  function saludo($nombre,$apellido){
    return "Hola $nombre $apellido";
  }
  echo saludo("Adrian","Coronel");
  
  echo "\n";
  function sumarNumeros($numeros){
    $resultado = 0;
    for ($i=0; $i < count($numeros) ; $i++) { 
      $resultado += $numeros[$i];
    }
    return $resultado;
  }

  $numeros = [ 4,74,345,764 ];
  echo "La suma de los valores del array es: ". sumarNumeros($numeros);

?>