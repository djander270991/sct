<?php
$nomber_day = 5;
$day= 5 - $nomber_day;

if ($nomber_day > 5) {
    echo 'Отдыхаем!!';
}
elseif ($day == 1){
    echo ("Осталось работать $day день");
}
else {

    echo ("Осталось работать $day дня")
;
}
