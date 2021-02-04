<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	//add numbers
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}

	//add three numbers
	public static function addThree($num1, $num2, $num3){
		$sum = $num1 + $num2 + $num3;
		return $sum;
	}

	//divide numbers
	public static function divide($num1, $num2){
		$sum = $num1 / $num2;
		return $sum;
	}
//subtract numbers 
	public static function subtract($num1, $num2){
		$sum = $num1 - $num2;
		return $sum;
	}
//more subtraction
	public static function subtractMore($num1, $num2, $num3) {
		$sum = $num1 - $num2 - $num3;
		return $sum;
	}
	// multiply numbers
public static function multiply($num1, $num2){
		$sum = $num1 * $num2;
		return $sum;
	}
<<<<<<< HEAD

	// return the average of two numbers
	public static function average($num1, $num2){
		$average = ($num1 * $num2)/2;
		return $average;
	}
=======
	//New Function
public static function newFunction($num1, $num2){
	$sum = $num1 + $num2;
	$average = $sum / 2;
	return $average;
}
>>>>>>> New Function
	
}
