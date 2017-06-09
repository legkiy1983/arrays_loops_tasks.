<?php
$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $var) {
    $day = 'Вторник';
    if ($var == $day) {
        echo "<i>$day</i> ";
    } else {
        echo "$var ";
    }
}
