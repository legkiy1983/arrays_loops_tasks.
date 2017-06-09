<?php
$arr = array (4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $var) {
    if ($var == 2 || $var == 3 || $var == 4) {
        echo 'Есть!';
        break;
    } else {
        echo 'Нет!';
        break;
    }
}
