<?php
$input = str_split(file_get_contents("Day1.txt"));
$totalsum = 0;
for ($i = 0; $i < count($input) - 1; $i++) {
    $totalsum += ($input[$i] == $input[(($i + (count($input) / 2)) % count($input))]) ? $input[$i] : 0;
}
echo $totalsum;