<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Lecture de la table modele</title>
<style type="text/css">
	table, tr, td, th {
		border-style: solid;
		border-color: red;
		background-color: yellow;
	}
	table {
		border-width: 3px;
		border-collapse: collapse;
	}
	tr, td, th {
		border-width: 1px;
	}
</style>
</head>
<body>
<?php
	require_once("connexpdo.inc.php");
	$pdo = connexpdo("voitures");
	$qry = "SELECT * FROM modele m ORDER BY m.modele;";
	$stt=$pdo->query($qry);
	
	echo '<table>
					<tr>
						<th>Code modèle</th>
						<th>Modèle</th>
						<th>Carburant</th>
					</tr>';
	while($record=$stt->fetch(PDO::FETCH_ASSOC)) {
		echo 	"<tr>
					<td>$record[id_modele]</td>
					<td>$record[modele]</td>
					<td>$record[carburant]</td>
				</tr>";
	}
?>
</body>
</html>
