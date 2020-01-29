<?php

	function affichage($e) {
			echo $e;
	
	}
	
	$emp1= new Employee(1, "Jean", 1800., 52);
	$emp2= new Employee(2, "Marc", 1456., 25);
	$emp3= new Employee(3, "Luis", 1282.5, 37);
	$emp4= new Employee(4, "Paul", 1282.5, 47);
					
	$tab = [$emp1, $emp2, $emp3, $emp4];
	
	function displayMAP ($T) {
		return array_map('affichage', $T);
	}
	
	function displayMOY ($T) {
		$moyenne = 0;
		$sum=0;
		for($i = 0; $i < count($T); ++$i) {
			$sum = $sum + $T[$i]->getSalary();
		}
		$moyenne = $sum/count($T);
		$M = strval($moyenne);
		echo "mean salary = ".$M."<br><br>";
	}
	
	//displayMAP($tab);
	//displayMOY($tab);
?>
