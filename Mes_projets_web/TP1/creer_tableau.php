<?php
    
    function generer(){//à chaque valeur du tableau, je donne un prix et un taux
        $prix_random= rand(0, 100);
        $taux= [0.05,0.10,0.20];
        $taux_random= $taux[array_rand($taux)]; //donne une valeur de $taux au pif
        
        return ["Prix"=>$prix_random, "Taux"=>$taux_random];
    }
    
?>