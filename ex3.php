<?php
function checkMultiple($number)
{
    if ($number % 3 == 0) {
        echo "$number is a multiple of 3.";
    } elseif ($number % 7 == 0) {
        echo "$number is a multiple of 7.";
    } else {
        echo "$number is not a multiple of 3 or 7.";
    }
}

$numbers = [9, 14, 21, 15, 35];

foreach ($numbers as $number) {
    echo "Checking $number: ";
    checkMultiple($number);
    echo "\n";
}
?>
