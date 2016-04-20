<?php
$arr = array(26, 17, 136, 12, 79, 15);
$rezult = 0;
foreach ($arr as $sum) {
    echo $sum . "*" . $sum . "+";
    $rezult += $sum*$sum;
}
echo "Сумма <sup> квадратов </sup> элементовэлементов массива = $rezult";