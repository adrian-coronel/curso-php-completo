<?php
  /* Arreglo Asociativo -> Una variable que puede guardar múltiples valores y puede acceder a ellos 
    mediante una palabra.
  */

  $edades = [
    "Adrian" => 19,
    "Junior" => 17,
    "Leonardo" => 16
  ];
  echo "La edad de Adrian es: {$edades["Adrian"]} \n";
  echo "La edad de Leonardo es: ". $edades["Leonardo"] ."\n \n";


  $personas = [
    "Adrian" => array(
      "edad" => 19,
      "apellido" => "Coronel",
      "dni" => "73260290"
    ),

    "Junior" => array(
      "edad" => 17,
      "apellido" => "Coronel",
      "dni" => "73264530"
    ),

    "Leonardo" => array(
      "edad" => 16,
      "apellido" => "Coronel",
      "dni" => "73434230"
    ),
  ];
  echo "La edad de Adrian es: {$personas["Adrian"]["edad"]}. Su apellido es: {$personas["Adrian"]["apellido"]}
        y su dni es: {$personas["Adrian"]["dni"]}";


?>