<?php
$input = str_split(file_get_contents("Day1.txt"));
$totalsum = 0;
for ($i = 0; $i < count($input) - 1; $i++) {
    $totalsum += ($input[$i] == $input[$i + 1]) ? $input[$i] : 0;
}
$totalsum += ($input[0] == $input[count($input) - 1]) ? $input[0] : 0;
echo $totalsum;