<?php

  $palabras = ["sol","luna","cielo","lluvia","mar"];
  

  $form = "<form action='analisis.php'>";

  for ($i=0; $i < count($palabras); $i++) { 
    #str_shuffle => Reordena aleatoriamente una cadena
    $form .= "La palabra: ". str_shuffle($palabras[$i]) ." ".
    "<input type='text' name='palabra$i'>".
    "<br>";
  }

  $button = "<button type='submit'>Enviar</button>";
  $formCierre = "</form>";

  echo $form.$button.$formCierre;

?>