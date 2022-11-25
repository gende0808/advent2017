<?php
$input = 277678;
$layer = 0;
$counter = 0;
for ($i = 1; $i < 49;) {
    $i += $counter;
    $counter += 8;
    echo "layer is $layer and highest number is $i counter is $counter<br>";
    $layer += 1;
}
