<?php 
	//bool genereListe (array $tab )
	function genereListe($tab)
	{
		if (is_array($tab) and !empty($tab)){
			foreach ($tab as $value)
			{
				echo "\t\t<li>$value</li>\n";
			}
		}
	}
	function genereListeDepuisFichier($nomFichier)
	{
		$tab = file($nomFichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		if (is_array($tab) and !empty($tab)){
			foreach ($tab as $value)
			{
				echo "<li>$value</li>\n\t\t\t";
			}
			echo "\n";
		}
	}

	function charge($nomFichier)
	{
		$file = fopen($nomFichier,"r", FILE_IGNORE_NEW_LINES);
		if ( !$file)
			die ("pb d'ouverture du fichier $nomFichier");
		while (!feof($file ))
		{
			$ligne = fgetcsv($file, 0, ":");
			if (!empty($ligne))
			{
				$case1 = array_shift($ligne);
				$tab[$case1] = $ligne[0];
			}
		}
		
		return $tab;
	}

	function metEnForme($var)
	{ 
		return ucFirst(strtolower($var));
	}

	function champNonRenseigne($nomInput)
	{
		if (!empty($_POST))
		{
			if(empty($_POST[$nomInput]))
			{
				echo "<p class='alerte'>Le $nomInput n’est pas renseigné</p>\n";
				return true;
			}
		}
		return false;
	}

	function genereListeDeroulante($nom, $textAvant, $tabContenu, $valParDefault)
	{
		echo "<label for='$nom'>$textAvant</label>\n";
		echo "\t\t\t\t\t<select name='$nom' id='$nom'>\n";
		echo "\t\t\t\t\t\t<option>$valParDefault</option>\n";
		foreach ($tabContenu as $value) {
			echo "\t\t\t\t\t\t<option";
			if (isset($_POST[$nom]) && $_POST[$nom] == $value )
 				echo " selected " ;
			echo "> $value </option>\n";
		}
		echo "\t\t\t\t\t</select>\n";

	}


	function genereCheckbox($name ,$tab)
	{
		echo "\n\t\t\t<p>\n\n";

		echo "\t\t\t\t<label for=\"$name\">".metEnForme($name)." :</label><br />\n";
		 $nomAvecCrochet = $name."[]";
		 foreach ( $tab as $val )
		 { 
		 	echo "\n\t\t\t\t<input type=\"checkbox\" name=\"$nomAvecCrochet\" id=\"$val\" value=\"$val\" ";
		 	
		 	if (isset($_POST[$name]) && in_array($val,$_POST[$name])) echo "checked" ;
			
			echo "/>\n\t\t\t\t<label for=\"$val\">$val</label><br />\n" ;
		}
		echo "\n\t\t\t</p>";
 	}

 ?>