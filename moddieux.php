<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomFichier = "dbDieux.csv";
$file = fopen($nomFichier, "r", FILE_IGNORE_NEW_LINES);
if (!$file)
    die("pb d'ouverture du fichier $nomFichier");
while (!feof($file)) {
    $ligne = fgetcsv($file, 0, ";");
    if (!empty($ligne)) {
        $cle = $ligne[0];
        unset($ligne[0]);
        $dieux[$cle] = $ligne;
    }
}
?>

<div class="container">

    <div class="slider" id="explication">
        <h1>Les dieux</h1>
        <p>
            Les dieux et les déesses habitaient dans un lieu enchanteur au-dessus des nuages : l’Olympe. Ceux-ci se prélassaient dans cet endroit paradisiaque en mangeant de l’Ambroisie et en buvant du Nectar.
            Même si leur vie semblait parfaite, ils s’ennuyaient parfois et cherchaient d’autres distractions.
            Or en se penchant, ils pouvaient observer le monde des humains, dont le destin, contrairement à celui des dieux, étaient de mourir un jour.
            Il n’était pas rare pour les dieux, de s’immiscer dans la vie des humains pour se divertir.
            Mais généralement, cette intrusion céleste avait des conséquences plutôt dramatiques comme la guerre de Troie qui n’est qu’un exemple parmi tant d’autres.
        </p>
    </div>

    <?php
    foreach ($dieux as $dieu => $infos) {
        echo "<div class=\"slider\" id=\"$dieu\">\n";
        echo "<h1>$dieu</h1>\n";
        echo "<br>";
        echo "<br>";
        echo "<h2>$infos[1]</h2>\n";
        echo "<br>";
        echo "<h3>$infos[2]</h3>\n";
        echo "<br>";
        echo "<p>$infos[3]</p>\n";
        echo "</div>\n";
    }
    ?>

    <form action="moddieux.php" method="post">
        <p>
            <label>Nom :</label> <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>">
        </p>
        <p>
            <label>Commentaires :</label>
            <textarea id="commentaire" name="commentaire" rows="5" cols="33" value="<?php if (isset($_POST['commentaire'])) echo $_POST['commentaire']; ?>"> </textarea>
        </p>
        
        <button type="submit">Envoyer</button>
    </form>
<?PHP
define("PAGENCOURS", $_SERVER['PHP_SELF']);
if(isset($_POST["nom"]) && isset($_POST["commentaire"])){
	$_POST["page"] = PAGENCOURS;
	
	$flux = fopen("com.csv", "a");
	if(!$flux){
		die("Problème à l'ouverture du fichier.");
	} else {
		fputcsv($flux, $_POST, ";");
	}
	fclose($flux);

}
$flux = fopen("com.csv", "r");
if(!$flux){
	die("Problème dans la base de donnée mysql ;)");
} else {
	while(!feof($flux)){
		$data = fgetcsv($flux, 0, ";");
		if($data[2] === PAGENCOURS){
			echo "<p>\n\t$data[0] a écrit : $data[1]\n</p>";
		}
	}
}
fclose($flux);
?>

</div>
