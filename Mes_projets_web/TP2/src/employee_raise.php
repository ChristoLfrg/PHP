<?php

	echo "Avant augmentation : <br><br>";
	displayMAP($tab);
	displayMOY($tab);
	
	function augmentation5 ($e)  {
		try {
			if ($e instanceof Employee) {
				$e->setSalary($e->getSalary()*1.05);
			}
			else {
				throw new Exception ("<br> Le param n'est pas un employee");
			}
		}
		catch (Exception $ex) {
			echo $ex->getMessage()."<br>";
		}
	}
	
	function raise ($T) {
		return array_map('augmentation5', $T);
	}
	
	raise($tab);
	echo "Après augmentation : <br><br>";
	displayMAP($tab);
	displayMOY($tab);
	
?>
