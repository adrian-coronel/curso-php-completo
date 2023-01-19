<?php
    
    $numero1 = "3";
    $numero2 = 3;

    var_dump(  $numero1 + $numero2  );; # En tiempo de ejercusion convierte "$numero1" a integer
    # y realiza la suma -> 6

    
    $numeroEntero = 10;
    $numeroDecimal = 0.2;

    $numeroActual = $numeroEntero + $numeroDecimal;
    var_dump(  $numeroActual  ); # Esta variable ahora es de tipo FLOAT

    $papas = "10 papas en el costal";
    $sumandoPapas = $papas + 5;

    echo $sumandoPapas; //Retorna un error, pero muestra la operacion -> 15

?>