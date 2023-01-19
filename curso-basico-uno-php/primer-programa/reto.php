<?php

  function convertSeconds($hours,$minutes,$seconds){
    $hoursOnSeconds = $hours * 3600;
    $minutesOnSeconds = $minutes * 60;
    return $hoursOnSeconds + $minutesOnSeconds + $seconds;
  }

  $hours = 6;
  $minutes = 56;
  $seconds = 4;

  $timeOnSeconds = convertSeconds( $hours,$minutes,$seconds );
  echo "$timeOnSeconds seconds";

?>