<?php
  # https://www.php.net/manual/es/ref.array.php

  $edades = [ 18, 30 ,24 ,80 ];

  # count -> tamaño del array
  echo count($edades) ."\n"; # 4

  # array_push -> agrega el 100 al final del array
  array_push($edades, 100);
  var_dump($edades);

  # is_array -> retorna true si es un array
  $esto_no_es_un_array = "soy un string";
  var_dump( is_array($edades) ); #true
  var_dump( is_array($esto_no_es_un_array) ); #false

  # explode -> convertir string en array
  $frutasString = "fresa,manzana,platano,sandia";
  $frutasArray = explode(",", $frutasString); #La coma es el separador que encontrada en el string
  var_dump( $frutasArray );

  # implode 
  $cochesArray = ["Toyota","Hyundai","Lamborghini","Ferrari"];
  $cochesString = implode(",", $cochesArray); # el primer parametro es con el que va a concatenar cada elemento
  var_dump( $cochesString );

  # array_keys — Devuelve todas las claves de un array o un subconjunto de claves de un array
  var_dump( array_keys($cochesArray) );

?>