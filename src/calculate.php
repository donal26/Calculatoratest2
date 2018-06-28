<?php

class Calculate{

	function add($a,$b){
		return $a+$b;
	}
	function rest($a,$b){
		return $a-$b;
	}
	function multiplicate($a,$b){
		return $a*$b;
	}
	function divide($a,$b){
		if($b!=0) return $a/$b;
		else return "Error Division entre 0";
	}

	function arrayAdded($array){
		$result=0;
		if($array !=null )
		foreach($array as $item){
			if( is_numeric($item) )
				$result+=$item;
		}
		return $result;
	}
}

?>