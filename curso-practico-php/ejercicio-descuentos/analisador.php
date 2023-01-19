<?php
  function getPrecioDescuento($precioProducto,$descuento){
    $entero = ($precioProducto / 100) * $descuento; 
    $decimal = $precioProducto * $descuento;
    return $descuento > 1 ? $entero : $decimal;
  }
  $descuento = 0.35;
  $gastoAhorrado = getPrecioDescuento($_REQUEST["precio"],$descuento);
  $total = $_REQUEST["precio"] - $gastoAhorrado;

  echo "El precio real del producto: ". $_REQUEST["precio"] ."<br>";
  echo "Precio ahorrado por el descuento es: $gastoAhorrado"."<br>";
  echo "Precio total a pagar: $total";

?>