<?php
$a = 2;
$b = 6;
$operator = "5";
switch ($operator) {
    case "/": if ($b != 0 ) {
        $operator = $a / $b;
    } else {
        $operator = "внимание! деление на ноль";
    };
        break;
    case "*": $operator = $a * $b; break;
    case "+": $operator = $a + $b; break;
    case "-": $operator = $a - $b; break;
    default: $operator = "действие неверно!";
};
echo $operator;