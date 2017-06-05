<?php

$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $ar){
        if ($ar==6 or $ar==7){
            echo "<b>$ar</b></br>";
        }else {
           echo $ar."<br>";
        }
}
