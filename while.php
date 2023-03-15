<?php
$world = 'Zemlya';
function revert($word){
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
revert($world);

