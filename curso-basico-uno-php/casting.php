<!-- El casting es cuando forzamos a que un tipo de dato cambie a otro tipo de dato -->
<?php

    $numeroString = "50";
    var_dump($numeroString); # string(2) "50"

    $numeroInteger = (int) $numeroString;
    var_dump($numeroInteger); # int(50)


    $dias = 5.89; # float(5.89)

    $dias = (int) $dias; # Corta los decimales
    var_dump($dias); # int(5)


    $esMayor = 0;
    var_dump($esMayor);

    $esMayor = (bool) $esMayor;
    var_dump(  $esMayor  ); # bool(false), caulquier otra cosa que no es 0, será TRUE
?>