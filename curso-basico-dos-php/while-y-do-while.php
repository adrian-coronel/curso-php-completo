<?php

#While
  $contador = 0;
  while( $contador <= 10 ){
    echo "Numero contador: $contador \n";
    $contador++;
  }

  # Do While -> Se ejecutará por lo menos UNA VEZ
  $iterador = 0;
  do{
    echo "Numero iterador: $iterador \n";
    $iterador++;
  } while( $iterador < 10 );



  #EJEMPLO DE INGRESAR USUARIOS REPETIDOS
  $usuarios = ["Adrian","Leonardo","Junior"];
  
  do {
    
    $usuario = readline("Ingresa el nombre del usuario: \n");

  } while( in_array($usuario, $usuarios) ); # Iterara solo si ingreso usuarios repetidos
?>