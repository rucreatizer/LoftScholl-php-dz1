<?php
$age = 0;


    if ($age >= 18 and $age <= 65) {
        echo "Вам ещё работать и работать";
    } elseif ($age > 65) {
        echo "Вам пора не пенсию";
    } elseif ($age >=1 and $age <=17) {
        echo "Вам ещё рано работать";
    } else echo "Неизвестный возраст";
