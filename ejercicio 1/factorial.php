<?php

  //programa que calcula el factorial de php

  $factoriral =1;
  $valor=5;

  for($pos=1;$pos<=$valor;$pos++){
    $factoriral *=  $pos;
  }

  echo 'El factorial de '.$valor.' Es .: '.$factoriral;
?>