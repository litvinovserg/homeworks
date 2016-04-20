<?php
$arr = array('Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400');
foreach ($arr as $key=>$cash) {
    echo $key . " - ";
    $cash = "зарплата $cash долларов" . "<br>";
    echo $cash;
}
