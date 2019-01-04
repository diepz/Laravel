<?php

$arr = [
        [3,2,4],
        [7,8,5],
        [1,6,9]
    ];

$max = 0;

for ($i = 0;$i < count($arr); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
            $index1 = $i;
            $index2 = $j;
        }
    }
}
echo $max ."<br>";
echo $index1."<br>";
echo $index2;


?>