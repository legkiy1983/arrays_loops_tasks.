<?php
$arr=array('Коля'=>200,
    'Вася'=>300,
    'Петя'=>400
);
foreach($arr as $key=>$ar){
    echo $key .' - зарплата ' . $ar .' долларов' ."\n";
}