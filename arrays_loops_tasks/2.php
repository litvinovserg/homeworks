<?php
$arr = array(1, 20, 15, 17, 24, 35);
$rezult = 0;
foreach ($arr as $sum) {
    echo $sum . "+";
    $rezult += $sum;
 }
 echo "Сумма элементов массива = $rezult";
