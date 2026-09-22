<?php
  //ejercicio recorrer array con los meses del anio

  $array_meses_esp = array(['ENERO',1],['FEBRERO',2],['MARZO',3],['MAYO',4],['ABRIL',5],['JUNIO',6],
                           ['JULIO',7],['AGOSTO',8],['SEPTIEMBRE',9],['OCTUBRE',10],['NOVIEMBRE',11],['DICIEMBRE',12]);
  $array_meses_eng = ['JANUARY','FEBRUARY','MARCH','MAY','APRIL','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'];

  $pos=0;

  echo '<table>';
  foreach ($array_meses_esp as $mes) { 
   echo '<tr>'; 
   
   echo '<td>';   
   echo ''.$mes[0];
   echo '</td>'; 
   
   echo '<td>';   
   echo ''.$array_meses_eng[$pos];
   echo '</td>'; 
   
   echo '</tr>'; 
   $pos++;
  }

  echo '</table>';

  if(array_search(1,$array_meses_esp)){
    echo 'existe ';
  }
?>