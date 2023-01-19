<?php

  function es_estudiante_legend($platzi_rank){
    if( $platzi_rank >= 20000 ){
      return "¡Eres un estudiante legend! \n";
    }
    return "Lo sentimos, aun no alcanzas el nivel legend \n";

  }

  echo es_estudiante_legend(80000);


  # Como asignar un valor por defecto a los parametros
  function suma($a = 1 , $b = 1){ //Valores por defecto
    return $a + $b . "\n";
  }

  echo suma(5, 5); # 10
  echo suma(5); # 6 => Ya que como asigne valores por defecto sería a = 5 + b = 1;
  

  #ARRAY UN PACKING
  $arreglo1 = [ 1, 2, 3 ];
  $arreglo2 = [ 4, 5, 6 ];

  $resultado = [ ...$arreglo1, ...$arreglo2 ]; # Desenpaqueta los arreglos
  var_dump($resultado);


  //ARRAY UN PACKING CON FUNCIONES
  $twoNumbers = [ 2,6 ];
  echo  suma(...$twoNumbers); // 8


  # PARAMETROS INFINITOS
  function suma_infinita(...$numbers){ #numbers se convierte en un arreglo
    $resultado = 0;
    foreach ( $numbers as $number ){
      $resultado += $number;
    }
    return $resultado;
  }

  echo "La suma infinita es: ".suma_infinita(3,4,5,67);


?>