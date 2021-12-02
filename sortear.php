<?php

$random = mt_rand(1111111111,9999999999).mt_rand(1111111111,9999999999);
$number_array = str_split($random);
$count = array_count_values($number_array);
$max = max($count);


$n = explode('":'.$max,json_encode($count));
$n = explode('"',$n[0]);

echo "Sequência: ".$random."\n";

echo "O número que mais se repete é o ".$n[1]."\n";
echo "Ele se repete {$max} vezes\n";
