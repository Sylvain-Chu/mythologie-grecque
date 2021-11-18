	<form method="post" action="recherche.php" class="recherche">
	<p>	
		<label for="recherche">Votre recherche : </label>
		<input type="text" name="recherche" placeholder="Votre recherche" required <?PHP if(isset($_POST["recherche"])){echo "value=\"".$_POST['recherche']."\"";} ?> />
	</p>
	<p>
		<input type="submit" id="recherche" value="Rechercher sur le site"/>
	</p>
	</form>


<?PHP
$flux = fopen("dbDieux.csv", "r");
if(!$flux){
	die("Problème lors de l'ouverture du fichier.");
} else {

	while(!feof($flux)){
		$data = fgetcsv($flux, 0, ";");
		$d[0] = $data[0];
		$d[1] = "index.php?page=dieux#".$data[0];
		$donnes[]=$d;
	}
array_pop($donnes);
}
fclose($flux);
	
$flux = fopen("dbBestiaire.csv", "r");
if(!$flux){
	die("Problème lors de l'ouverture du fichier.");
} else {

	while(!feof($flux)){
		$data = fgetcsv($flux, 0, ";");
		$d[0] = $data[1];
		$d[1] = "index.php?page=bestiaire#".$data[0];
		$donnes[]=$d;
	}
array_pop($donnes);
}
fclose($flux);
	
$flux = fopen("dbMythesLegendes.csv", "r");
if(!$flux){
	die("Problème lors de l'ouverture du fichier.");
} else {

	while(!feof($flux)){
		$data = fgetcsv($flux, 0, ";");
		$d[0] = $data[1];
		$d[1] = "index.php?page=mythesLegendes#".$data[0];
		$donnes[]=$d;
	}
array_pop($donnes);
}
fclose($flux);


if(!empty($_POST["recherche"])){
	$rech = $_POST["recherche"];
	$ok = false;
	$c = array('é', 'è', 'à', 'ù', '-', 'î', 'ï');
	$rech = strtoupper(str_replace($c, '.', $rech));
	foreach($donnes as $v){
		$vv = strtoupper(str_replace($c, 'e', $v[0]));
		if(preg_match("/$rech/",$vv) != false){
			echo "<a href=\"$v[1]\">".$v[0]."</a>\n";
			$ok = true;
		}
	}
	if(!$ok){
		echo "<p>Il semblerait que notre site ne contient pas de partie sur ";
			echo $_POST["recherche"];
	       echo"</p>";
	}
}

?>
