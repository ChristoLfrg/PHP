<?php
	echo "<pre>";print_r( $tab);echo "</pre>";
	
	function cmp($a, $b){
        if ($a->getSalary() < $b->getSalary()) return -1;
        if ($a->getSalary() > $b->getSalary()) return 1;
        else return -1;
    }
    
    usort($tab,"cmp");
	
	echo "<pre>";print_r( $tab);echo "</pre>";
	
?>
