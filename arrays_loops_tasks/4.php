<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "<b> keys: <br> </b>";
foreach ($arr as $color_key_ru) {
    echo $color_key_ru . "<br>";
}
echo "<br>";
echo "<b> elements:<br> </b>";
foreach ($arr as $key=>$color_elements_en) {
    echo $key . "<br>";
}