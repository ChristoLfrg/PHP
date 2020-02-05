<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>TP 4 - PHP - Inscription d'employés</title>
</head>
<style>
	table {
		border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
	
	th {
		width: 100px;
	}
	
	td {
	  height: 30px;
	  vertical-align: bottom;
	}
</style>
<body style="background-color: #ffcc00;">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<fieldset>
		<legend><b>Inscrire un employé</b></legend>
			<label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="nom" value="" size="30" maxlength="60" required="required"/><br/><br/>
			
			<label>Salaire :&nbsp;</label>
			<input type="number" name="salaire" min="0" max="100000" step="5000" size="6" required="required"/><br/><br/>
			
			<label>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="number" name="age" min="18" max="100" size="6" required="required"/><br/><br/>
			
			<input type="submit" value="Inscrire" name="inscrire" />
		</fieldset>
	</form>
	<h4><a  href="http://localhost/Mes_projets_web/TP3/accueil.php">Retour à l'accueil</a></h4>
	<?php
		$ligne=0;
		$ligne++;
		echo '<table>
					<tr>
						<th>NUMERO</th>
						<th>NOM</th>
						<th>SALAIRE</th>
						<th>AGE</th>
					</tr>';
		
		function afficher($a){
			while (($data = fgetcsv($a, 1000, ";")) !== FALSE){
				echo '<tr>';
				for($i=0 ; $i < count($data) ; $i++){
					echo '<td>'.$data[$i].'</td>';
				}			
				echo '</tr>';
			}
			fclose($a);
		}
		
		if (($f = fopen("./employees.csv", "a+")) !== FALSE){	//SI CSV ALORS AFFICHE
			afficher($f);
		}
		echo '</table>';
		
		function ecrire($a,$b,$c,$d){
			$f = fopen("./employees.csv", "a+");
			
			fputs($f, "$a;$b;$c;$d\n");
			
			fclose($f);
		}
		
		if (isset($_POST['inscrire'])){		//SI INSCRIRE ALORS ECRIRE CSV
			
			$nom = $_POST['nom'];
			$salaire = $_POST['salaire'];
			$age = $_POST['age'];
			$ligne++;
			ecrire($ligne,$nom,$salaire,$age);
			afficher(fopen("./employees.csv", "a+"));
		}
	?>
</body>
</html>
