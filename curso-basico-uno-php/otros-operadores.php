<?php
  # Operador de asignación
  $edad_de_jaimito = ($edad_de_pepito = 10) + 5;

  echo "Edad de pepito es: $edad_de_pepito \n"; # 10
  echo "Edad de jaimito es: $edad_de_jaimito \n"; # 15

  # Operadores de incremento
  $contador = 0;

  $contador += 1;
  $contador -= 4;
  $contador++;
  $contador--;
  $contador *= 2;
  $contador /= 2;

  # Operador de concatenación
  $nombre = "Adrian";
  $nombre .= " Coronel"; #$nombre = $nombre ." ". "Coronel";
  
  #Ejemplo de precedencia
  $numero = 0;
  $resultado = ++$numero;
  echo "\n $resultado"; # 1

  $numero2 = 0;
  $resultado2 = $numero2++; #Primero asigna y luego suma
  echo "\n $numero2"; # 1
  echo "\n $resultado2"; # 0
  

?>