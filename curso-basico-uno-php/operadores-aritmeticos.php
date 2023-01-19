<?php 
  $a = 5;
  $b = 20;
  $c = 50;
  
  #adición -> +
  echo $a + $b + $c ."\n";

  #sustracción -> -
  echo $c - $b -$c ."\n";

  #multiplicación -> *
  echo $a * $b * $c ."\n";

  #división -> /
  echo $c / $a ."\n";

  #modulo -> %
  echo $b % 2 ."\n";

  #potenciación -> **
  echo $a ** 3 ."\n";

  #identidad -> +$a convierte un strng a int o float
  var_dump(  +"5"  ); # int 5
  var_dump(  +"3.4"  ); # float 3.4

  #negación -> -$a convierte un numero positivo a negativo
  echo -$b; # -20
?>