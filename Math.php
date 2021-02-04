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
	public static function add($num1, $num2){
		$sum = $num1 * $num2;
		return $sum;
	}
<<<<<<< HEAD
	
		public static function divide($num1, $num2){
=======

	//add three numbers
	public static function addThree($num1, $num2, $num3){
		$sum = $num1 + $num2 + $num3;
		return $sum;
	}

	//divide numbers
	public static function divide($num1, $num2){
>>>>>>> 3a98baaba113f55fe2be81741ef78e071c594e33
		$sum = $num1 / $num2;
		return $sum;
	}
	
}