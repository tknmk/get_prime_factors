<?php

// 
// Find Prime numbers in between a range.
// 

$num = $argv[1];
echo "The range is  ".$num.". \n";

// factoring
for($i=2; $i <= $num; $i++){
	for($k=2; $k < $i; $k++){
		if ($i%$k == 0){
			break;
		}
	}
	if($k == $i){
		echo "Prime number -> ".$i."\n";
		$n[] = $i;
	}
}
echo "counts: ".count($n)."\n";
