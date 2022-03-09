<?php
// user input of a, b, c for Quadratic equation
$a = readline('Enter Value of a: ');
$b = readline('Enter Value of b: ');
$c = readline('Enter Value of c: ');
$delta = ($b * $b) - (4 * $a * $c);

/**
 * Function for calculating root1
 * Passing parameters of a, b, c and delta
 * Returns the root1
 */
function root1($a, $b, $c, $delta)
{
    $root1 = (-$b + sqrt($delta)) / (2 * $a);
    return $root1;
}

/**
 * Function for calculating root2
 * Passing parameters of a, b, c and delta 
 * Returns the root2
 */
function root2($a, $b, $c, $delta)
{
    $root2 = (-$b - sqrt($delta)) / (2 * $a);
    return $root2;
}

// Printing roots of Quadratic Equation
echo "Root 1: " . root1($a, $b, $c, $delta);
echo "\nRoot 2: " . root2($a, $b, $c, $delta);
