<?php
    include 'creer_tableau.php';
    
    $articles= range("A","K");
    
    $tab= array_fill_keys($articles, 0);
    $tab= array_map("generer",$tab);
    
    function cmp($a, $b){
        if ($a["Taux"] < $b["Taux"]) return -1;
        if ($a["Taux"] > $b["Taux"]) return 1;
        if ($a["Prix"] < $b["Prix"]) return 1;
        else return -1;
    }
    
    usort($tab,"cmp");
    
    echo "<style>
        table {
            border-collapse: collapse;
        }
        table th, td {
            border: 1px solid black;
        }
        table th {
            tex t-align:center;
            width: 130px;
        }
        table td {
            text-align:right;
        }
        table td:first-child{
            text-align:left;
        }
        table td:last-child{
            background-color:red;
        }
        </style>
    
    <h3>Facture détaillée en €</h3>
    <table><tr>
    <th>Articles</th>
    <th>Prix</th>
    <th>Taux T.V.A.</th>
    <th>Coût H.T.</th>
    <th>Coût T.T.C.</th></tr><tr>";
    
    //echo "<pre>";
    //print_r( $tab);echo "</pre>";
    
    foreach ($tab as $key=>$value){
        echo "<tr>";
        echo "<td>".$key."</td>";//affichage de l'article
        echo "<td>".$value["Prix"]."</td>";//affichage du prix
        echo "<td>".$value["Taux"]."</td>";//affichage du taux tva
        echo "<td>".($value["Prix"]*$value["Taux"])."</td>";//affichage du cout ht
        echo "<td>".($value["Prix"]*$value["Taux"]+$value["Prix"])."</td>";//affichage du cout ttc
        echo "</tr>";
    }
?>