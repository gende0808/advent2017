<?php
$input = 277678;
$layer = 0;
$counter = 0;
for ($i = 1; $i < $input;) {
    $layer += 1;
    $counter += 8;
    $i += $counter;
}
echo $layer + min(array_map("abs", ([$input - ($i - (($counter / 8) * 1)), $input - ($i - (($counter / 8) * 3)), $input - ($i - (($counter / 8) * 5)), $input - ($i - (($counter / 8) * 7))])));