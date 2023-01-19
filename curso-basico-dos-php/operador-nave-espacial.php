<?php
  # Uno de los usos que le puede dar al operador <=> es ordenar una serie de numeros
  # usort() => Ordena un array según sus valores usando una función de comparación definida por el usuario

  $precios_cafes = [ 3,456,43,65,243,678,4 ];

  #usort() -> recorrerá un arreglo y irá dandole los valores a 2 parametros($a y $b)
  usort($precios_cafes, function($a, $b){
    return $a <=> $b;
  }); 
  /*La función de comparación debe devolver un entero menor, igual o mayor que cero si el primer
    argumento se considera que sea respectivamente menor, igual o mayor que el segundo. Observe
    que antes de PHP 7.0.0 este entero debía estar en el rango de -2147483648 a 2147483647. */

    var_dump( $precios_cafes );
?>