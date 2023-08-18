<?php

$n = 1;
while ($n <= 30){

    if (($n % 3 == 0) || ($n % 5 == 0)) {
        echo "Número:" . $n . "<br>";
    }
    $n++;
}

?>