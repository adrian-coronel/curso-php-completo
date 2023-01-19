<?php
  /*
    Crear un array que contenga 3 michis, cada uno tendra un nombre, ocupacion, comidas.
    Tendra comidas favoritas y noFavoritas
  */

  $michis = [
    "michi1" => array(
      "nombre" => "michiAsiatico",
      "ocupacion" => "Caza en las noches",
      "comidas" => array(
        "favoritas" => array(
          "ceviche","lomo saltado"
        ),
        "noFavoritas" => array(
          "arroz con huevo","platano frito"
        )
      )
    ),

    "michi2" => array(
      "nombre" => "michiBengali",
      "ocupacion" => "Caza en la mañana",
      "comidas" => array(
        "favoritas" => array(
          "arroz con huevo","platano frito"
        ),
        "noFavoritas" => array(
          "ceviche","lomo saltado"
        )
      )
    ),

    "michi3" => array(
      "nombre" => "michiAbisinio",
      "ocupacion" => "Caza en las tardes",
      "comidas" => array(
        "favoritas" => array(
          "chaufa","seco a la norteña"
        ),
        "noFavoritas" => array(
          "arroz con pollo","atún"
        )
      )
    )
  ];

  echo "Una de las comidas favoritas del {$michis["michi1"]["nombre"]} es el {$michis["michi1"]["comidas"]["favoritas"][0]} \n";


  # EJEMPLO DEL PROFESOR
  $michis = [
    array(
      "nombre" => "michiAsiatico",
      "ocupacion" => "Caza en las noches",
      "comidas" => array(
        "favoritas" => "ceviche, lomo saltado",
        "noFavoritas" => "arroz con huevo, platano frito"
      )
    ),

    array(
      "nombre" => "michiBengali",
      "ocupacion" => "Caza en la mañana",
      "comidas" => array(
        "favoritas" => "arroz con huevo, platano frito",
        "noFavoritas" => "ceviche, lomo saltado"
      )
    ),

    array(
      "nombre" => "michiAbisinio",
      "ocupacion" => "Caza en las tardes",
      "comidas" => array(
        "favoritas" => "chaufa, seco a la norteña",
        "noFavoritas" => "arroz con pollo, atún"
      )
    ),
  ];

  echo "La comida favorita de ".$michis[1]["nombre"] ." es ". $michis[1]["comidas"]["favoritas"] ;


?>