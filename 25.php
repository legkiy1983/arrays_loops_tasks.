<?php
$arr = array();
for ($i=0; $i<=20; $i++) {
    $arr[] = rand(0, 30);
}

echo "<pre>";
    print_r($arr);
echo "<pre>";

$min_value = min($arr);
$max_value = max($arr);

foreach($arr as $key=> $value){
    if($value == $min_value){
        $arr[$key] = $max_value;
    }
    if($value == $max_value){
        $arr[$key] = $min_value;
    }
}

echo "<pre>";
    print_r($arr);
echo "<pre>";
