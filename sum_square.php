<?php 

//The sum of the squares of the first ten natural numbers is,
//1^2 + 2^2 + ... + 10^2 = 385
//The square of the sum of the first ten natural numbers is,
//(1 + 2 + ... + 10)^2 = 552 = 3025
//Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
//Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

$sum1 = 0;
$sum2 = 0;

for ($i = 1; $i <= 100; $i++){
	$sum1 += ($i * $i);
	$sum2 += $i;
}

$sum2 *= $sum2;

$difference = $sum2 - $sum1;

echo "sum1 : " . $sum1 . PHP_EOL;
echo "sum2 : " . $sum2 . PHP_EOL;
echo $sum2 - $sum1 . PHP_EOL;
echo "The difference is : " . ($sum2 - $sum1) . PHP_EOL;