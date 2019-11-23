<?php
echo "<table><tr>";
for ($x = 1; $x <=10; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        if (($y % 2 == 0) and ($x % 2 == 0)) {
            echo "<td>"."(" . $x * $y . ")"."</td>";
        } elseif (($y % 2 <> 0) and ($x % 2 <> 0)) {
            echo "<td>"."[" . $x * $y . "]"."</td>";
        } else echo "<td>".$x * $y."</td>";

    } echo "</tr>";
}
echo "</table>";