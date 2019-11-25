<?php
function task1($mas,$concat = false) {
    if (!$concat) {

        foreach ($mas as $value) {
            echo "<p>";
            print_r($value);
            echo "</p>";
        }
    } else {
        $str = "";
        foreach ($mas as $value) {
            $str .= $value;
            echo "</p>";
        }
        echo $str;
    }
}

function task2(...$args)
{
    $count = func_num_args();
    $res_num = func_get_arg(1);
    $res_str = func_get_arg(1);
//    echo "<pre>";
//    var_dump($args);
    for ($index = 2; $index <= $count - 1; $index++) {
        $value = func_get_arg($index);
        if (func_get_arg(0) == "+" and $index <> 0) {
            $res_num += $value;
            $res_str .= $value . "+";
        } elseif (func_get_arg(0) == "-" and $index <> 0) {
            $res_num = $res_num - $value;
            $res_str .= "-" . $value;
        } elseif (func_get_arg(0) == "*" and $index <> 0) {
            $res_num = $res_num * $value;
            $res_str .= "*" . $value;
        } elseif (func_get_arg(0) == "/" and $index <> 0) {
            $res_num = $res_num / $value;
            $res_str .= "/" . $value;
        };
    };
    echo "Результат: ";
    echo $res_str;
    echo '=' . $res_num;
}

function task3($num1,$num2) {
    if (is_int($num1) and is_int($num2)) {
        echo "<table><tr>";
        for ($x = 1; $x <= $num1; $x++) {
            for ($y = 1; $y <= $num2; $y++) {
                echo "<td>".$x * $y."</td>";

            } echo "</tr>";
        }
        echo "</table>";
        } else echo "Введены некорректные числа";
}

function task4() {
    echo date("d.m.Y h:i:s");
    echo "<br>";
    echo strtotime("24.02.2016 00:00:00");
}

function task5($str1,$str2) {
    $str1 = str_replace("К","", $str1) . "</br>";
    $str2 = str_replace("Две","Три", $str2);
    $str2 = str_replace("лимонада","пива", $str2) . "</br>";
    echo $str1;
    echo $str2;

}

function task6($file) {
    echo fgets(fopen(dirname(__DIR__) . "\\" . $file,'r'));
}