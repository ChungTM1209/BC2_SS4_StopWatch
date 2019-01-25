<?php
include_once 'StopWatch.php';
$arr = [];
for ($i = 0; $i < 15000; $i++) {
    $arr[$i] = $i * rand(1, 10000);
}
function selectionSortAscending($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    return $arr;
}

$stopWatch = new StopWatch();
$stopWatch->startTime();
$arr1 = selectionSortAscending($arr);
for ($i = 0; $i < count($arr1) - 1; $i++) {
    echo $arr1[$i] . "<br>";
}
$stopWatch->stopTime();
echo "Time start: " . $stopWatch->getStartTime() . "<br>";
echo "Time end: " . $stopWatch->getEndTime() . "<br>";
echo "Time runing: " . $stopWatch->getElapsedTime() . "s";