<?php
$values = array(
50 ,20 ,10 ,5 ,2 ,1 ,0.50 ,0.20 ,0.10 ,0.05, 0.02, 0.01
);

$inputRounded = round($argv[1], 2);
if(!$inputRounded == 0) {
    foreach($values as $values2){
        $inputRounded = round($inputRounded, 2);
        $amountOfx = floor($inputRounded / $values2);
        if(!$amountOfx == 0) {
            echo "> $amountOfx x " . $values2 . PHP_EOL;
            $inputRounded = $inputRounded - ($amountOfx * $values2);
        }
    }
} else {
    exit("> geen wisselgeld.");
} 


