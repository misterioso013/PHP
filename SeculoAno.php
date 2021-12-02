<?php
function SeculoAno($ano) {
    $seculo = 100;

    $getSeculo = $ano / $seculo;
return $ano." = Século ".ceil($getSeculo);
}
echo SeculoAno(2021);