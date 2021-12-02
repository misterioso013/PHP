<?php

function PrimoInferior($num) {
    if($num < 0) return 0;

    $i = $num;
    while(true) {
        $i--;
        if ($i < $num and ValidarPrimo($i)) {
            echo $i;
            break;
        }
    }
}
function ValidarPrimo($num) {
    for($i = 2; $i < $num; $i++) {

        if($num % $i == 0) {
            break;
        }
    }
    if($num == $i){
        return true;
    }else {
        return false;
    }
}
echo PrimoInferior(443);
