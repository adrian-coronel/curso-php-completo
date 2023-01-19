<?php

  function clear(){
    if(PHP_OS === "WINNT"){ #PHP_OS => PHP retorna mi sistema operativo en el que se ejecuta, (WINNT es Windows)
      # cls => Lo mismo que clear en comandos de linux
      system("cls"); # Permite ejecutar comandos del sistema operativo
    } else {
      system("clear");
    }
  }

  $possible_words = [ "Bebida","Carro","Continente","Universo","Adrian","Cohete","Queso"];
  define("MAX_ATTEMPS", 6); # constante, intentos maximos = 6

  echo "Bienvenido al juego del ahorcado \n";

  # Inicializamos el juego
  $choosen_word = $possible_words[ rand( 0, count($possible_words) - 1 ) ];
  $choosen_word = strtolower($choosen_word); #Convierte el string en MINUSCULAS
  $word_length = strlen($choosen_word); # Cuando mide el string
  $discovered_letters = str_pad("", $word_length, "_"); #rrellena un string dependiendo de lo que se pase en sus parametros
  $attemps =  0; #fallos

  do {
    echo "Palabra de $word_length letras \n";
    echo "Letras descubiertas $discovered_letters \n";

    # Pedimos al usuario que escriba

    $player_letter =  readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);
    if( str_contains( $choosen_word, $player_letter ) ){ # str_contains verifica si una variable contiene un valor, retorna bool
      # Verificamos todas las ocurrecias de esta letra para reemplazarla
      $offset = 0; # Desde donde comanzará a recorrer
      while( 
        ($letter_position = strpos( $choosen_word, $player_letter, $offset)) 
        !== false
        ){ #strpos() -> retorna la posición de la primera ocurrencia de la letra que se ingrese, si ya no se encuentra nada, retorna false
        $discovered_letters[$letter_position] = $player_letter;
        $offset = $letter_position + 1; #inicia desde la letra adelante de la encontrada
      }
    } else {
      
      $attemps++;
      echo "Letra incorrecta. Te quedan ". (MAX_ATTEMPS - $attemps) ." intentos";
      sleep(2); #Pausa el programa por 2 segundos
    }
    echo " \n";
    clear();

  } while( $attemps < MAX_ATTEMPS && $discovered_letters != $choosen_word );

  if ( $attemps < MAX_ATTEMPS)
    echo "Felicidades, has adivinado la palabra";
  else
    echo "Suerte para la proxima amigo";
  
  echo "La palabra era $choosen_word \n";
  echo "Tu descubriste $discovered_letters";
  
?>