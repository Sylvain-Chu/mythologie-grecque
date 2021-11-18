<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomFichier = "dbBestiaire.csv";
$file = fopen($nomFichier, "r", FILE_IGNORE_NEW_LINES);
if (!$file)
    die("pb d'ouverture du fichier $nomFichier");
while (!feof($file)) {
    $ligne = fgetcsv($file, 0, ";");
    if (!empty($ligne)) {
        $cle = $ligne[0];
        unset($ligne[0]);
        $betes[$cle] = $ligne;
    }
}
?>

<div class="container">
    <div class="sliderbestiaire" id="bestiaire">
        <div class="contenu">
            <h1>Bestiaire</h1>
            <p>
                Dans le monde des mortels, il n’y avait pas que les humains. En effet, ceux-ci étaient souvent importunés par des monstres.
                Eux aussi, créés par les dieux n’avaient pas de bonnes intentions envers les humains. Ayant chacun un physique et une histoire différente,
                la liste ci-dessous va vous en faire une description.
            </p>
        </div>
    </div>
    <?php
    foreach ($betes as $bete => $infos) {
        echo "<div class=\"sliderbestiaire\" id=\"$bete\">\n";
        echo "<div class=\"contenu\">\n";
        echo "<h1>$infos[1]</h1>\n";
        echo "<br>";
        echo "<p>$infos[2]</p>\n";
        echo "</div>\n";
        echo "</div>\n";
    }
    ?>
</div>

<div class="commentairesDIV">
    <form action="index.php?page=bestiaire#commentaires" method="post" id="commentaires">
        <p>
            <label>Nom :</label><input type="text" name="nom" id="nom" placeholder="Nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>">
        </p>
        <p>
            <label>Commentaires :</label>
            <textarea id="commentaire" name="commentaire" rows="5" cols="33" placeholder="Mettez vos commentaire ici..."></textarea>
        </p>

        <button type="submit" id="boutonEnvoyer">Envoyer</button>
    </form>

    <?PHP
    if (isset($_POST["nom"]) && isset($_POST["commentaire"])) {
        $flux = fopen("com.csv", "a");
        if (!$flux) {
            die("Problème à l'ouverture du fichier.");
        } else {
            fputcsv($flux, $_POST, ";");
        }
        fclose($flux);
    }
    $flux = fopen("com.csv", "r");
    if (!$flux) {
        die("Problème dans la base de donnée mysql ;)");
    } else {
        while (!feof($flux)) {
            $data = fgetcsv($flux, 0, ";");
            if (!empty($data)) {
                echo "<div class=\"commentaire\">\n\t<h4>$data[0]</h4>\n\t<p>$data[1]</p>\n</div>\n";
            }
        }
    }
    fclose($flux);
    ?>
</div>