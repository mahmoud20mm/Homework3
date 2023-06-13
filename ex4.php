<?php
function findLargestNumber($num1, $num2, $num3) {
    $largestNumber = $num1;

    if ($num2 > $largestNumber) {
        $largestNumber = $num2;
    }

    if ($num3 > $largestNumber) {
        $largestNumber = $num3;
    }

    return $largestNumber;
}

$num1 = 10;
$num2 = 20;
$num3 = 15;

$largestNumber = findLargestNumber($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is: $largestNumber";
?>
