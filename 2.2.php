<?php
$input = explode(PHP_EOL, file_get_contents("Day2.txt"));
$totalsum = 0;
foreach($input as $row){
    $numbers = preg_split('/\s+/', $row);
    foreach($numbers as $number){
        foreach($numbers as $comparison){
            $totalsum += (is_int($number / $comparison) && $number != $comparison) ? $number / $comparison : 0;
        }
    }
}
echo $totalsum;