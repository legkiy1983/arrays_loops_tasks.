<?php

$arr=array(1,2,3,4,5,6,7,8,9,10,11,12);
//echo $arr[6];

foreach($arr as $ar){
    $month=date("w");
    if ($ar==$month){
        echo "<b>$ar</b></br>";
    }else{
        echo($ar)."<br>";}

}
//$month=date("w");
//echo "<b>$month</b>";