<?php
//Exercise 1.
	$a=5;
	$b=12;

	if (($a >= 0) && ($b >= 0)) {
		echo $a - $b;
	} elseif (($a < 0) && ($b < 0)) {
		echo $a * $b;
	} else {
		echo $a + $b;	
	}

	echo "<hr>";

//Exercise 2.
	$a = rand(0,15);
	function Output($a){
		echo $a." ";
		if ($a < 15) {
			return Output($a+1);
		}
	}
	
	Output($a);
	echo "<hr>";


	//Можно сделать иначе, через switch. Не уверен, что правильно, но, как я понимаю, получится вот так:

	switch ($a) {
		case 0:
			echo "0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 1:
			echo "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 2:
			echo "2,3,4,5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 3:
			echo "3,4,5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 4:
			echo "4,5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 5:
			echo "5,6,7,8,9,10,11,12,13,14,15";			
			break;
		case 6:
			echo "6,7,8,9,10,11,12,13,14,15";			
			break;
		case 7:
			echo "7,8,9,10,11,12,13,14,15";			
			break;
		case 8:
			echo "8,9,10,11,12,13,14,15";			
			break;
		case 9:
			echo "9,10,11,12,13,14,15";			
			break;
		case 10:
			echo "10,11,12,13,14,15";			
			break;
		case 11:
			echo "11,12,13,14,15";			
			break;
		case 12:
			echo "12,13,14,15";			
			break;
		case 13:
			echo "13,14,15";			
			break;
		case 14:
			echo "14,15";			
			break;
		case 15:
			echo "15";			
			break;
		
	}

	echo "<hr>";



//Exercise 3.
	function sum($a,$b){
		return $a+$b;
	}
	function diff($a,$b){
		return $a-$b;
	}
	function mult($a,$b){
		return $a*$b;
	}
	function division($a,$b){
		return $a/$b;
	}
//Exercise 4.
	function mathOperation($a,$b,$operation){
		switch ($operation) {
			case '-':
				echo diff($a,$b);
				break;
			case '+':
				echo sum($a,$b);
				break;
			case '/':
				echo division($a,$b);
				break;
			case '*':
				echo mult($a,$b);
				break;
			default:
				echo "Invalid values or sign";
				break;
		}
	}

	mathOperation(4,5,'-');
	echo "<hr>";
//Exercise 6.

	function power($val,$pow){
		if ($pow == 0) {
			return 1;
		} else if ($pow > 0){
			return $val * power($val,$pow-1);
		} else if ($pow < 0) {
			return power(1/$val, -$pow);
		}
	}

	echo power (5,4);
	echo "<hr>";
//Exercise 7.
	
	$timeH  =  date('H');

	if ($timeH % 20 == 1) {
		$textH = "Час ";
	} elseif (($timeH % 20 >= 2) && ($timeH % 20 <= 4)) {
		$textH = "Часа ";
	} elseif (($timeH % 20 >= 5) || ($timeH % 20 == 0)) {
		$textH = "Часов ";
	}

	echo $timeH." ".$textH;

	$timeM = date('i');

	if ($timeM % 10 == 1) {
		$textM = "Минута ";
	} elseif ($timeM % 10 >= 5 || $timeM % 10 == 0 || ($timeM >= 11 && $timeM <= 19) ) {
		$textM = "Минут ";	
	} elseif ($timeM % 10 <=4 && $timeM % 10 >= 2) {
		$textM = "Минуты ";
	}

	echo $timeM." ".$textM;

?>