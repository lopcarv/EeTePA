<?php
$numero = 5;    // Tipo: int 
$texto  = '5';  // Tipo: string 

echo "Teste com == (igualdade): ";
var_dump($numero == $texto); // Retorna true: os valores são 5 

echo "<br>Teste com === (identidade): ";
var_dump($numero === $texto); // Retorna false: os tipos (int vs string) são diferentes 
?>
