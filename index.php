<?php
function converterString($string){
$date =  new DateTime($string);
$formantDate = $date->format('Y-m-d H:i:s');
return $formantDate;
}

$estacion =  converterString('2023-08-09 15:30:00');
echo gettype($estacion);

?>