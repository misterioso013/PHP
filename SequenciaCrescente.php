<?php
function SequenciaCrescente($array){
if(max(array_count_values($array)) > 2 ) return false;
    $repeat_count[] = 0;
    foreach(array_count_values($array) as $repeat) {
        $repeat_count[] = $repeat;
    }
    if(array_sum($repeat_count) > 3) return false;
    $tamanho = count($array);
    $i = 0;
    foreach ($array as $nn){
        $i ++;
        $cc["$i"] = $nn;
    }

    $ii = 0;
    while(true){
        $ii++;
        if($ii == $tamanho) break;

        if($cc[$ii] < $cc[$ii+1]) {
            $count[$ii] = "t";
        }else{
            $count[$ii] = "n";
        }
    }
    if(array_count_values($count)["n"] > 1){
        return "false";
    }else{
        return "true";
    }
}

var_dump(SequenciaCrescente([1, 3, 2]));
