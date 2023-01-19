<?php
  /* En este ejemplo hallaremos el numero favorito de caulquier persona
    junior: 7 <- Su numero favorito
    adrian: 8
    leonardo: 13
    edilson: 4
    alonso: 9
  */

  $persona = "Alonso";

  switch( $persona ){
    case "Alonso":
      echo "Su numero favorito es el 9"; 
      break;
    case "Adrian":
      echo "Su numero favorito es el 8";
      break;
    case "Junior":
      echo "Su numero favorito es el 7";
      break;
    case "Leonardo":
      echo "Su numero favorito es el 13";
      break;
    case "Edilson":
      echo "Su numero favorito es el 4";
      break;
    default:
     echo "No se encontro el nombre ingresado";
  }


?>