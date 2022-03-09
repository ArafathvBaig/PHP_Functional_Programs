<?php
include "./Functional_Programs/Distance.php";
/**
 * Note: the formula is not valid if t is larger than 50 in absolute value 
 * or  if v is larger than 120 or less than 3 
 * (you may assume that the values you get are in that range).
 */
$t = readline('Enter temperature t Value: ');
$v = readline('Enter wind speed v Value: ');

/**
 * Function to calculate windchill w
 * Passing temperature and wind speed as parameters
 */
function windChill($t, $v)
{
    if ($t > 50 || $v < 3 || $v > 120) {
        echo "The Formula of w is not valid";
    } else {
        $w = 35.74 + (0.6215 * $t) + (((0.4275 * $t) - 35.75) * (pow($v, 0.16)));
        echo "The Wind Chill is: " . $w;
    }
}
windChill($t, $v);
