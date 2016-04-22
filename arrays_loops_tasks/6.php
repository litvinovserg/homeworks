<?php
$en = array('green','red','blue');
$ru = array('зеленый','красный','голубой');
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $key=>$value) {
    $en[] = $key;
    $ru[] = $value;
    echo $key;}
