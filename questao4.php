<?php
$impar = 0; 
$contador = 0; 
$numero = 1; 

while ($contador < 10) {
    if ($numero % 2 != 0) { 
        $impar += $numero; 
        $contador++; 
    }
    $numero++; 
}

echo "Soma:" . $impar;
?>
