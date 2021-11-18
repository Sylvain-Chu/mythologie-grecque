<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<section id="Arbre-Généalogique">
    <img src="img/arbre_genealogique.png" usemap="#image-arbre" width="100%" height="100%">
</section>

<div class="telechargement">
    <p><a href="img/arbre_genealogique.png" download="Généalogie">Télécharger l'arbre</a></p>
</div>

<div class="commentairesDIV">
    <form action="index.php?page=genealogie#commentaires" method="post" id="commentaires">
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