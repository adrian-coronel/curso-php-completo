<?php

  function get_pokemon(){

    $numero_aleatorio = rand(1 ,5); # rand() genera un valor random y se le puede agregar parámetros rand(min,max)

    switch($numero_aleatorio){
      case 1:
        echo "Pikachu";
        break;
      case 2:
        echo "Charmander";
        break;
      case 3:
        echo "Mewtwo";
        break;
      case 4:
        echo "Bulbazur";
        break;
      default:
        echo "El poquemón no existe";
    }
    echo "\n";
  }

  get_pokemon();

?>