<?php
$s = 600; //длина участка, который проехал автомобиль (км).
$t = 3; //время движения в часах (ч).
$v = $s / $t; //км/ч
$v_m = $v * 1000 / 3600;

echo "Cкорость автомобиля на заданном участке: $v км/ч или $v_m м/с";

