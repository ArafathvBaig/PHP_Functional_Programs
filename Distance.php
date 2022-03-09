<?php
// user input for points x1 and y1
$x1 = readline('Enter Value for X1: ');
$y1 = readline('Enter Value for Y1: ');
/**
 * Own implementation for power function 
 * Passing parameters of number and its power and 
 * checking the valid power conditions
 */
function power($num, $power)
{
    if ($power == 1) {
        return $num;
    } elseif ($power == 0) {
        return 1;
    } else {
        $temp = $num;
        for ($i = 1; $i < $power; $i++) {
            $temp *= $num;
        }
        return $temp;
    }
}
//echo "Output: " . power($x1, $y1);

/**
 * Function to calculate the length and 
 * print the length
 * Passing the points x1 and y1 as parameters
 */
function distance($x1, $y1)
{
    $length = sqrt(power((0 - $x1), 2) + power((0 - $y1), 2));
    echo "The Length of (" . $x1 . ", " . $y1 . ") and origin (0, 0) is: " . $length;
}

distance($x1, $y1);
