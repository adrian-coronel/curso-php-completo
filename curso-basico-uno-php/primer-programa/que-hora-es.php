<?php
  //$segundos = 3900; #INPUT
  function convertTime($segundos){
    $horas = (int) ($segundos / 3600); 
    $minutos = (int) (($segundos %= 3600) / 60);
    $segundos = (int) ($segundos % 60);
    echo "Son $horas horas, $minutos minutos y $segundos segundos";
  }
  // $horas = (int) ($segundos / 3600); 
  // $minutos = (int) (($segundos %= 3600) / 60);
  // $segundos = (int) ($segundos % 60);
  // echo "Son $horas horas, $minutos minutos y $segundos segundos";
  convertTime(10900);
?>