<?php
$input = explode(PHP_EOL, file_get_contents("Day2.txt"));
$totalsum = 0;
foreach($input as $row){
    $numbers = preg_split('/\s+/', $row);
    $totalsum += max($numbers) - min($numbers);
}
echo $totalsum;