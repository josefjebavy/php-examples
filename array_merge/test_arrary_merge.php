<?php

$array1 = array(
    "nula" => "nula",
    '1' => false,
    "6" => "sest"
);


$array2 = [
    "2" => "dva",
    "5" => "pet",
    "6" => "sest c2",
    "9" => "devet"
];

$merge1 = array_merge($array1, $array2);


$merge2 = $array1;
foreach ($array2 as $key => $val) {
    $merge2[$key] = $val;
}

$merge3 = $array1 + $array2;

echo "array_merge: ";
var_dump($merge1);
echo "foreach: ";
var_dump($merge2);
echo "plus: ";
var_dump($merge3);
/*
ksort($merge2);
var_dump($merge2);
*/