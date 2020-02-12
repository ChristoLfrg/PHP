<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
		enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Modèle de voiture</b>
			</legend>
			<table>
				<tr>
					<td>Code :</td>
					<td><input type="text" name="id_modele" size="40" maxlength="30" required="required"/></td>
				</tr>
				<tr>
					<td>Nom du modèle :</td>
					<td><input type="text" name="modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Carburant : <select name="carburant">
							<option value="essence">Essence</option>
							<option value="diesel">Diesel</option>
							<option value="gpl">G.P.L.</option>
							<option value="électrique">Electrique</option>
					</select></td>
				</tr>
				<tr>
					<td><input type="reset" value=" Effacer "></td>
					<td><input type="submit" value=" Envoyer " name="envoyer"></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	require_once("connexpdo.inc.php");
	require_once ("js.php");
	
	if (isset($_POST['envoyer'])){
		
		$pdo = connexpdo("voitures");
		$qry = "INSERT INTO modele (id_modele, modele, carburant) VALUES (:i, :m, :c);";
		$stt=$pdo->prepare($qry);
		
		
		$id_modele = $_POST['id_modele'];
		$modele = $_POST['modele'];
		$carburant = $_POST['carburant'];
		
		$data = [':i'=>$id_modele,':m'=>$modele, ':c'=>$carburant];
		
		try {
			$stt->execute($data);
			alert("Modèle bien enregistré");
		} catch (PDOException $e) {
			displayException($e);
		}
	}
	else {
		alert("Fail.");
	}
?>
</body>
</html>
