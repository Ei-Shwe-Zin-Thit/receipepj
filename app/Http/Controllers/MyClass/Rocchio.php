<?php


namespace App\Http\Controllers\MyClass;


class Rocchio
{
	#function section
	#calculation for New Query(function)
	public static function calc($a,$b,$c){
		$result = $a + 1.0*$b - 0.5*$c;
		return $result;
	}

	#calculation for Centriod Vector(function)
	public static function calcu1($x){
		$length1= count($x);
		$a = 0;
		for ($i = 0; $i<$length1; $i++){
			$a = $a + $x[$i];
		}
		return $a/$length1;
	}

	public static function getArray($arr,$key){
	    $temp=[];
	    foreach ($arr as $data){
	        array_push($temp,$data[$key]);
        }
	    return $temp;
    }
}
