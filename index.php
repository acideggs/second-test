<?php 

function looping($number){
	for($i = 1 ; $i <= $number; $i++ ) {
		echo "$i ";
		switch($i){
			case $i % 15 === 0 : 
				echo "fish bash";
				break;
			case $i % 5 === 0 : 
				echo "bash";
				break;
			case $i % 3 === 0 :
				echo "fish";
				break;
		}
		echo "\n";
	}
}

function sortAsc($number){
	$newArr = $number;
	for ($i = count($number) ; $i >= 1 ; $i--) { 
		for ($j = 0; $j < $i ; $j++) { 
			if(isset($newArr[$j + 1])){
				if ($newArr[$j] > $newArr[$j + 1]) {
					$temp = $newArr[$j];
					$newArr[$j] = $newArr[$j + 1];
					$newArr[$j + 1] = $temp;
				}
			}
		}
	}
	return $newArr;
}

function sortDsc($number){
	$newArr = $number;
	for ($i = count($number) ; $i >= 1 ; $i--) { 
		for ($j = 0; $j < $i ; $j++) { 
			if(isset($newArr[$j + 1])){
				if ($newArr[$j] < $newArr[$j + 1]) {
					$temp = $newArr[$j];
					$newArr[$j] = $newArr[$j + 1];
					$newArr[$j + 1] = $temp;
				}
			}
		}
	}
	return $newArr;
}

function reverse($word){
	$strNew = "";
	for ($i = strlen($word) - 1 ; $i >= 0 ; $i--) { 
		$strNew .= $word[$i];
	}
	if ($strNew === $word) {
		return 'true';
	} else {
		return 'false';
	}
}

echo "Soal no 1\n";
looping(30);

echo "\nSoal no 2\n";
$number = [12,1,3,4,6,2];
$number = sortAsc($number);
foreach ($number as $value) {
	echo "$value ";
}
echo "\n";
$number = [45,41,1,-121,96,4];
$number = sortDsc($number);
foreach ($number as $value) {
	echo "$value ";
}

echo "\n\nSoal no 3\n";
echo reverse("kasur");
echo "\n";
echo reverse("makam");