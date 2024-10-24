<?php


/* Transponiendo matrices al trabajar recorriendo
 para no trabajar nunca con columnas y siempre fácilmente con columnas
 
 
*/

 function transpose($matrix) {
   $n = count($matrix);
   $matrix_copy = $matrix;

   for ($i = 0; $i < $n; $i++) {

      for ($j = 0; $j < $n; $j++) {

         $matrix[$i][$j] = $matrix_copy[$j][$i];

        }
    }

   return $matrix;
}

function addingRowsAndColumns($arr){
    $sumRows=[];
    $sumColumns=[];
    $arrTranspose = transpose($arr);
    for ($i= 0; $i<count($arr); $i++) 
        array_push($sumRows, array_sum($arr[$i]));
    for ($i= 0; $i<count($arrTranspose); $i++) 
        array_push($sumColumns, array_sum($arrTranspose[$i]));
    return [$sumRows, $sumColumns];
}