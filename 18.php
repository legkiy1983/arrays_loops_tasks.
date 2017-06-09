<?php

$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $var) {
    if ($var == 'Суббота') {
        echo "<b>$var</b>" . ' ';
    } elseif ($var == 'Воскресенье') {
        echo "<b>$var</b>";
    }else {
        echo $var . ' ';
    }
}
