<?php
$world = 'Zemlya';
function revers($word){
    $i = 0;
    $result = ' ';
    while($i<strlen($word)){
        $char = $word[$i];
        $result= "$char"."$result";
        $i++;
        ;
    }
    echo $result;
}
revers($world);

