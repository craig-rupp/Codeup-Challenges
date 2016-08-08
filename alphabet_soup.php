<?php

fwrite(STDOUT, 'Please enter the string you would like alphabetized.' . PHP_EOL); 

$input = trim(fgets(STDIN));

$sort = str_split($input);
sort($sort);

$sort = implode($sort);



//echo $input . PHP_EOL;

function alphabetSoup($input){
	$alphabetizedArray = explode(' ', $input);
	foreach ($alphabetizedArray as $key => $value) {
		$word = str_split($value);
		sort($word);
		$alphabetizedArray[$key] = implode('', $word);

	}
		$yourNewOrder = implode(" ", $alphabetizedArray);
		return $yourNewOrder;
			 
}

$yourNewOrder = alphabetSoup($input);

echo "Your {$input} alphabetized is now " . $yourNewOrder . PHP_EOL;