<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomFichier = "dbMythesLegendes.csv";
$file = fopen($nomFichier, "r", FILE_IGNORE_NEW_LINES);
if (!$file)
    die("pb d'ouverture du fichier $nomFichier");
while (!feof($file)) {
    $ligne = fgetcsv($file, 0, ";");
    if (!empty($ligne)) {
        $cle = $ligne[0];
        unset($ligne[0]);
        $mythesLegendes[$cle] = $ligne;
    }
}
?>

<div class="container">


    <div class="slidermythe" id="mythe">
        <div class="contenu">
            <h1>Les Mythes et Legendes</h1>
            <p>
                Les dieux, qui avaient fréquemment des aventures avec des mortels, donnaient naissance à des humains avec des dons surnaturels.
                Mais ceux-ci n’avaient pas la vie facile. En effet, ils devaient généralement s’occuper de tâches inhumaines qu'ils arrivaient à réaliser grâce à leur sang divin
                et parfois même avec l’aide des dieux. Mais ces demi-dieux n’étaient pas les seuls héros des mythes grecs,
                simples humains accomplissent aussi des exploits en utilisant leur intelligence ou encore leur ruse.
            </p>
        </div>
    </div>

    <?php
    foreach ($mythesLegendes as $mytheLegende => $infos) {
        echo "<div class=\"slidermythe\" id=\"$mytheLegende\">\n";
        echo "<div class=\"contenu\">\n";
        echo "<h1>$infos[1]</h1>\n";
        echo "<p>\n";
        echo "$infos[2]\n";
        echo "</p>\n";
        echo "</div>\n";
        echo "</div>\n";
    }
    ?>

    <div class="slidermythebis" id="12travaux">
        <div class="contenu">
            <h1>Les 12 Travaux d'Héraclès</h1>
        </div>
        <p>
            Contexte, Héra plongea Héraclès dans une folie meurtrière, le poussant à tuer sa femme et ses enfants.
            Accablé de remords, il chercha un moyen pour se repentir. Il rencontra l’oracle de Delphes qui lui donna une série d'épreuves inhumaines comme punition.
            <br><br>1er travail : Le Lion de Némée<br>Ce lion qui faisait des ravages dans la région de Némée était la 1ère tâche d’Héraclès,
            il traqua la bête jusqu’à sa grotte et tenta de le trancher, mais la peau du Lion de Némée était impénétrable, Héraclès lui a donc attrapé le cou et l'étrangle
            jusqu’à la mort.<br><br>2eme travail : L’Hydre de Lerne<br>L’hydre de Lerne, vivant à proximité d’Argos, possède neuf têtes dont une dorée immortelle, à chaque
            fois qu’on lui coupe une tête, deux en repoussent. Au vu de la difficulté du combat, Héraclès demande de l’aide à Iolas, son cousin. Iolas cautérisait les têtes
            coupées et Héraclès l’enterra vivante sous une montagne.<br><br>3eme travail : La biche de Cérynie<br>La biche de Cérynie était une biche avec des cornes en or et
            des sabots de bronze, étant sacré par la Déesse de la chasse, Héraclès était obligé de la capturer vivante, il poursuivit la biche pendant un an à travers toute
            la Grèce et une fois que la biche se reposa, Héraclès la captura avec un filet<br><br>4eme travail : Le sanglier d’Erymanthe<br>Ce sanglier gigantesque effrayait la
            population, pour l’attraper, le plan d’Héraclès était similaire à celui de son 3e travail, il poursuivit la bête jusqu’à l’épuisementet l’attrapa simplement
            grâce à une corde.<br><br>5eme travail : Les écuries d’Augias<br>Les écuries du Roi Augias était si sale, du fait de la taille du troupeau d’animaux, que nul ne
            pouvait y entrer. Héraclès promit à Augias de les nettoyer en une seule journée. Pour ce faire, il détruisit un des murs de l’écurie ainsi que le mur opposé, grâce
            à sa force surhumaine, il détourna le cours d’une rivière et l’eau se déversa à travers toutes les écuries, les nettoyant au passage.<br><br>6eme travail :
            Les oiseaux du lac Stymphale<br>Ces oiseaux carnassiers tuaient et terrorisaient les paysans du lac Stymphale. Héraclès, pour s’en débarrasser, utilisa des crotales
            forgés par Héphaïstos, qui sont une sorte d’instrument de musique semblable à nos cymbales moderne. Le bruit très puissant de cet instrument fit peur aux oiseaux et
            Héraclès en profita pour les tuer grâce à son arc.<br><br>7eme travail : Le Taureau de Crète<br>Le Roi Minos de Crète promis au dieu Poséidon qu’il sacrifiera tout ce
            que le dieu lui enverrais, Poséidon lui envoya un Taureau d’un blanc immaculé, Minos le trouva si beau qu’il refusa de le tuer, pour le punir, Poséidon lança une
            malédiction du Pasiphaé, la femme de Minos, elle tomba folle amoureuse du Taureau et finira donc par donner naissance au Minotaure. Héraclès arriva par la suite à
            Crète et n’eut aucune difficulté à capturer le taureau.<br><br>8eme travail : Les juments de Diomède<br>Diomède possédait des juments mangeuses d’hommes, alors
            qu’Héraclès arriva avec des guerriers pour attraper ces juments, Abdéros, un ami d’Héraclès fini par se faire manger vivant par les juments de Diomède, pour se venger,
            Héraclès captura Diomède et le jeta à manger à ses propres juments, Héraclès fini par capturer les juments et reparti.<br><br>9eme travail : La ceinture d’Hippolyte
            <br>Hippolyte est la fille d’Arès et cheffe des amazones, un peuple uniquement constitué de femmes, Héraclès est venue voir Hippolyte avec ses hommes pour lui demander
            sa ceinture, elle accepta sans problème, mais Héra, mécontante de la facilité de ce travail trompa les amazones pour les forcer à se battre contre Héraclès et ses
            hommes, dans la bataille, Héraclès tua Hippolyte et parti avec la ceinture.<br><br>10eme travail : Le troupeau de Géryon<br>Géryon était un monstre composé de trois
            géants reliés par la taille, il possédait donc trois têtes, six jambes, et six bras, Héraclès devait ramener le troupeau gardé par le monstre,
            il affronta d’abord Orthos, le chien a deux tête de Géryon puis affronta ce dernier, le tuant en lui tirant des flèches. Une fois ramené, le troupeau fut
            sacrifié en l'honneur d’Héra.<br><br>11eme travail : Le jardin des Hespérides<br> Héraclès devait aller chercher les pommes d’or du jardin des Hespérides,
            des nymphes de la lumière du crépuscule, filles d’Atlas. En cherchant le jardin, Héraclès trouva Atlas, le titan qui fut puni et qui doit porter la voûte céleste pour
            l’éternité, Héraclès lui demanda où se trouvait le jardin, Atlas lui proposa un marché : Il irait chercher les pommes lui même en échange que Héraclès porte la voûte
            céleste à sa place le temps d’aller chercher les pommes, Héraclès accepta, mais une fois qu’Atlas récupéra les pommes d’or, il laissa Héraclès, cependant, Héraclès
            lui demanda s’il pouvait porter la voûte céleste le temps qu’il mette la peau du Lion de Némée afin de l’aider à porter la voûte, Atlas accepta et à l’instant où il
            commença à porter la voûte, Héraclès pris les pommes et la fuite.<br><br>12eme travail : Cerbère<br>Pour le dernier et plus difficile des 12 travaux, Héraclès dus
            aller en enfer pour ramener Cerbère le chien infernal à trois tête, dans le monde des vivants, il trouva Hadès et lui demanda s’il pouvait emmener la bête, Hadès
            accepta à la seule condition qu’Héraclès arrive à dompter la bête à la seule force de ses mains. Après un combat des plus féroces, Héraclès finit par étrangler les
            trois têtes, domptant le chien trifaciale infernal, en le ramenant devant l’oracle de Delphes, celui ci pris peur, il fût aussi très surpris de voir qu’Héraclès avait
            réussi à revenir du monde des morts avec la bête, et demanda à Héraclès de le rendre à son maître en échange de la fin des travaux.
            <br><br>C’est ainsi que les 12 travaux d’Héraclès prirent fin.
        </p>
    </div>


    <div class="slidermytheUlysse" id="Ulysse">
            <div class="contenu">
                <h1>L'Odysée d'Ulysse</h1>
            </div>
            <p>
                Une fois la guerre de Troie terminée et gagnée par les grecs, Ulysse et ses hommes voulurent repartir pour leur île, Ithaque.
                Il s'ensuit alors une longue épopée...<br><br>Le pays des Lotophages.<br> Ils partirent de Troie malheureusement, un vent violent et le courant les firent dériver
                pendant neuf jours.Ils aperçurent alors une terre qui avait l’air hospitalière. Méfiant, Ulysse envoya trois de ses hommes en reconnaissance. Ils furent bien accueillis
                par les habitants de cette contrée, les Lotophages. Ceux-ci leur offrirent à manger du lotos, un fruit doux comme le miel. Une fois qu’il l’eurent goûté, les éclaireurs
                d’Ulysse oublièrent tout, qui ils étaient et ce qu’ils étaient venu faire ici et voulaient terminer leurs jours sur cette terre. Ulysse et les siens usèrent de force pour
                les ramener dans les navires et repartirent en mer.<br><br>Le cyclope.<br> Ce faisant, ils arrivèrent au pays des cyclopes. Les cyclopes étaient des géants, fils de
                Poséidon, dieu des mers et des tempêtes. Ils habitaient dans des cavernes et n’avaient qu’un œil au milieu du front.Ulysse, plus que vigilant avec la précédente péripétie
                décida d’y aller avec 12 hommes. Ne croisant personne, ils rentrèrent dans une caverne. Voyant que celle-ci était habitée, ils attendirent le maître des lieux.
                Alors que la nuit tombait, le cyclope rentra dans la grotte suivi de son troupeau de bélier et referma la grotte avec une immense pierre. Une fois que celui-ci s’aperçut
                qu’il avait des invités, il en prit deux et les mangea. Le lendemain, le cyclope sortit avec son troupeau et remit la pierre pour enfermer Ulysse et ses compagnons.
                Ceux-ci profitèrent alors de l’absence du cyclope pour tailler sur un tronc d’olivier, une pointe. Le soir venu, le cyclope garda ses habitudes, il rentra son troupeau et
                mangea deux compagnons d’Ulysse. Celui-ci lui proposa alors du vin en guise de cadeau sous le nom de Personne. Le cyclope, Polyphème de son nom, accepte le cadeau et but
                tout le vin de Ulysse. Une fois que les effluves de l’alcool montèrent à la tête du cyclope, il s’endormit. Les prisonniers s’emparèrent du tronc d’olivier et le plantèrent
                dans l’unique œil de Polyphème. Celui-ci essaya de tuer ses prisonniers mais ne disposant plus de la vue il n’y parvint pas. Il alerta alors les autres cyclopes présents sur
                l’île que personne essayait de le tuer. Or ceux-ci ne comprirent pas et ne vinrent pas l’aider. Mais Ulysse et ses compagnons étaient encore prisonniers de Polyphème.
                Malgré tout, Ulysse, aux mille ruses, attache ses hommes sous les béliers et s'accroche lui aussi à un bélier. Ainsi, le matin, quand le cyclope toucha ses animaux pour
                les laisser paître sur l’île, il ne remarqua pas Ulysse et ses hommes qui s’échappaient de leur prison. Une fois sur leurs navires, Ulysse se moqua de Polyphème qui s’était
                fait berner. Celui-ci demande alors à son père Poséidon de le venger en empêchant Ulysse de rentrer chez lui.<br><br>Eole et le pays des Lestrygons.<br> De nouveau en mer,
                Ulysse et ses compagnons atteignirent l’île d’Eole, le dieu des Vents. Celui-ci les traita comme des rois et voyant le désir de Ulysse de rentrer chez lui, lui donna un sac en
                qui refermé par un lacet d’argent contenant tous les vents violents excepté Zéphir. Ceux-ci poussant les navires de Ulysse et ses compagnons vers Ithaque.
                Pendant neuf jours et neuf nuits, ils naviguèrent, apercevant Ithaque au début du dixième jour. Ulysse, qui avait tenu la barre durant toute cette période,
                lâcha celle-ci pour tomber dans le sommeil. Mais, pendant son sommeil, ses compagnons qui pensaient que Eole lui avait donné de l’or ouvrirent le sac. Ce faisant,
                les bateaux changèrent de direction en s’éloignant d’Ithaque et revenant sur l’île d’Eole. Celui-ci qui avait appris que Poséidon en voulait à Ulysse refusa de les aider à
                nouveau.Ulysse et ses compagnons repartirent alors en mer.<br><br> Ils approchèrent alors de l’île des Lestrygons. En voyant un port, ils s’y amarrent, Ulysse, qui restait
                toujours méfiant, prend soin de mettre son navire le plus près de la sortie. De nouveau, il envoya trois hommes en reconnaissance. Deux de ses hommes revinrent en courant,
                poursuivis par des lestrygons (des géants) qui brandissaient des rochers. Aussitôt, Ulysse sortit du port avec son navire, cela ne fut pas le cas des autres navires qui
                essayèrent une pluie de rochers et qui ont fini par couler.<br><br>Circé.<br> Ulysse et ses compagnons arrivent alors sur l’île de Circé la magicienne. Sur place, Ulysse
                demande à la moitié de ses hommes d’aller explorer cette île. Un seul revint, effrayé, ils avaient découvert une maison, et en s’approchant, ils avaient entendu une voix
                mélodieuse à l’intérieur. Ils avaient frappé et une femme leur a ouvert mais un des hommes d’Ulysse, méfiant, n’était pas rentré dans la demeure. Après quelque instant,
                celui-ci n’entendait plus de bruit de la part de ses camarades et repartit prévenir Ulysse. Celui-ci, bien décidé de ne pas laisser mourir ses compagnons, partit en direction
                de cette maison. Sur le chemin, un homme lui barrait la route, c’était Hermès. Il informa le grec qu’il se trouvait sur l’île de la magicienne Circé et que celle-ci avait
                transformé ses compagnons en pourceaux en leur faisant boire une potion. De plus, le messager des dieux donna à Ulysse une herbe pour qu’il ne soit pas à son tour transformé
                par la magicienne. Puis Hermès disparut avant qu’Ulysse puisse le remercier. Ce dernier partit donc en direction de la maison, bien décidé à sauver ses camarades. Il frappa à
                la porte et Circé lui ouvrit, elle lui fit boire sa potion et attendit. Mais Ulysse, immunisé par les herbes d’Hermès ne se transforma pas et attaqua la sorcière en lui
                demandant de rendre à ses compagnons leurs formes originales. Celle-ci accepta et jura sur les dieux qu’elle ne ferait plus de mal à Ulysse et ses compagnons.
                Ceux-ci profitent de l’hospitalité de la magicienne durant l’hiver. À la fin de celui-ci Ulysse lui demanda des conseils pour retrouver son île natale.
                Elle lui conseilla d’aller consulter l’Ombre de Tirésias aux pays des Morts en lui expliquant comment lui parler.<br><br>Le pays des Morts.<br>
                Ulysse et ses compagnons se laissèrent alors porter par le vent et arrivèrent au pays des morts. Sur les conseils de Circé, Ulysse offrit aux Morts du lait avec du miel,
                du vin et de l’eau pure. Il sacrifia ensuite un agneau et une brebis noire et laissa les Morts dont il voulait entendre la voix goûter au sang. Il pu ainsi entendre Tirésias
                le devin. Celui-ci lui apprit que son retour à Ithaque serait pénible car Poséidon lui en voulait d’avoir aveuglé son fils le cyclope Polyphème. Il lui apprit également que
                s’il restait maître de lui et que ses hommes ne touchaient pas au troupeau du Soleil, il retrouverait bientôt son île. Si en revanche lui et ses camarades ne respectaient
                pas ces conditions, il rentrerait à Ithaque seul et bien des années plus tard pour y trouver le malheur à son logis. Après cela, Ulysse vit sa mère qui lui informa que sa
                femme Pénélope l’attendait toujours et que son fils Télémaque avait grandi. Ce fut avec ces précieuses informations qu’Ulysse et ses compagnons remirent les voiles, quittant
                le pays des Morts.<br><br>Les sirènes, Charybde et Scylla.<br> Après ce passage chez les morts, Ulysse et ses compagnons retournèrent chez Circé la magicienne.
                Celle-ci donne alors des conseils à Ulysse pour éviter les pièges qui allaient se présenter devant lui et ses camarades. Ceux-ci repartirent le matin-même navigant en
                direction de l’île des Sirènes, ces femmes-oiseaux dont le chant mélodieuxattirait irrésistiblement les marins. Mais malheur à ceux qui les écoutaient, les sirènes les
                dévoraient. Ulysse, prévenu par Circé, boucha les oreilles de ses compagnons avec de la cire. Mais, comme il voulait entendre les sirènes, il demanda à ses hommes de
                l’attacher solidement au mât et de ne le détacher sous aucun prétexte. Ils s’approchèrent ainsi de l’île des Sirènes et Ulysse, entendant leur chant envoûtant ordonna
                à ses compagnons de le détacher pour qu’il puisse rejoindre les sirènes. Mais ceux-ci ne le détachent pas et accélèrent la cadence. Une fois qu’ils estiment que l’île
                était suffisamment loin, ils détachèrent Ulysse.Mais à peine cet obstacle passé, les voyageurs arrivent dans une passe étroite où sont tapis deux monstres.
                D’un côté Scylla, une créature à douze pieds et à six têtes qui mangeait des animaux marins ou des hommes si ceux-ci s’approchaient trop près. De l’autre côté,
                se tenait Charybde, trois fois par jour, elle vomissait de l’eau de mer puis la ravalait en emportant tout ce qui s’y trouvait. Circé avait conseillé Ulysse de longer
                le côté où il y avait Scylla car il valait mieux perdre six hommes que de sombrer dans les entrailles de Charybde. Ce fut ce que fit Ulysse qui perdit alors six de ses
                camarades mais qui put continuer son chemin vers Ithaque.<br><br>Les vaches du Soleil.<br> Ulysse et ses compagnons arrivent alors à l’île du Soleil et Ulysse met en
                garde ses hommes. Tirésias leur avait dit que s’ils voulaient rentrer chez eux le plus rapidement possible il ne fallait surtout pas toucher au troupeau du Soleil.
                Une fois sur l’île, ils essayèrent de pêcher afin de reprendre de la force pour la suite du voyage. Les résultats de cette pêche n’étant pas fructueux,
                Ulysse partit seul prier les dieux de lui venir en aide. Hélas, pendant son absence, ses compagnons, poussés par la faim, avaient tué du bétail du troupeau du
                Soleil. Pour ne pas attirer la colère du dieu Soleil, Ulysse partit avec ses hommes de l’île du Soleil. Mais une fois au large, une violente tempête éclata, pour venger le
                Soleil qui avait perdu des vaches, Zeus en personne lança sa foudre sur le navire d’Ulysse qui se disloqua. Alors que tous les hommes d’Ulysse se noyèrent,
                celui-ci parvint à fabriquer un radeau de fortune. Mais tourmenté par la tempête, Ulysse va dériver pendant neuf jours avant d’arriver sur l’île de Calypso.<br>
                <br>Calypso<br>À peine arrivé sur l’île de Calypso, Ulysse s’effondra, épuisé, affamé, le corps meurtri par le soleil et le sel. Mais Calypso le vit et lui porta secours.
                Calypso aimait Ulysse, qui reconnaissant envers elle de lui avoir sauvé la vie, se laissa aimer. Pendant sept ans, Ulysse resta sur cette île. Mais un jour, Zeus, qui ne
                supportait pas que Calypso puisse aimer un homme, ordonna à Ulysse de quitter l’île. Il trouva alors des outils et du bois pour concevoir un radeau. Une fois qu’il fut
                terminé, Ulysse prit la mer emporté par un vent favorable de Calypso.<br><br>Nausticaa et les Phéaciens.<br> Ulysse, naviguant sur son radeau de fortune depuis 17 jours,
                aperçut enfin une terre à l’horizon. Mais alors qu’il allait remercier les dieux, tous les vents sedéchaînent, détruisant ainsi son embarcation. Il dut alors, à la nage
                rejoindre l’île qu’il avait vu. Après deux jours et deux nuits à combattre la mer en furie, il parvint à prendre pied sur une plage. Après avoir dormi dans une niche formée
                par deux oliviers, il fut réveillé par des voix de femmes. Alors, simplement vêtu d’une branche pour cacher sa nudité, il demanda de l’aide aux femmes qui l’avaient réveillé.
                Toutes s’enfuirent en courant sauf une, c’était Nausicaa, fille du roi des Phéaciens. Elle offrit des habits à Ulysse et lui donna à manger. Elle lui conseilla également
                d’aller dans le bois de peupliers consacré à Athéna afin de prier la déesse pour que celle-ci puisse l’introduire dans le palais d' Alcinoos. Ulysse y alla et Athéna se
                manifesta à lui sous la forme d’une petite fille. Elle le conduisit jusqu’au palais où il se présenta sans se nommer et expliqua son grand désir de retrouver sa terre natale.
                Le lendemain, le roi offrit un banquet en l’honneur de son invité. Lors de ce banquet, un poète contait les exploits d’Ulysse lors de la guerre de Troie. Et Ulysse pensa à ses
                camarades morts au combat ou pendant le voyage et se mit à pleurer. Il révéla alors son identité et conta son histoire. Le roi des Phéaciens promet de ramener Ulysse chez lui.
                <br><br>Le retour<br> Ulysse arriva enfin sur Ithaque, sa terre natale. Il y croisa Athéna qui le mit en garde que sa demeure était envahie par des jeunes hommes de la
                régions qui le croyaient mort et qui courtisaient sa femme. Athéna transforma Ulysse en un vieillard et l’envoya chez Eumée, le porcher d’Ulysse qui lui était resté fidèle.
                Pendant ce temps, Athéna est partie chercher Télémaque, le fils d’Ulysse et l’informe qu’il est de retour. Avec son père, ils vont élaborer un plan pour chasser
                les prétendants du palais. Il enlevèrent toutes les armes de la salle de banquet sauf deux lances, deux boucliers et deux épées pour Ulysse et Télémaque. Le lendemain,
                Pénélope, la femme d’Ulysse proposa aux prétendants de tendre l’arc d’Ulysse et de tirer une flèche qui passerait dans douze anneaux de hache. Celui qui réussissait ce défi
                pourrait alors devenir son époux. Tous les prétendants essayèrent mais aucun ne put tendre l’arc. Ulysse, toujours sous son déguisement de vieillard, demanda alors à essayer.
                Les prétendants se moquèrent de lui mais il parvint sans difficulté à tendre l’arc et à tirer une flèche au travers des douze anneaux. À cet instant, son déguisement tomba et
                avec l’aide de Télémaque, ils tuèrent tous les prétendants. Pénélope, qui ne savait pas si c’était le véritable Ulysse lui demanda, puisqu’il avait gagné de déplacer le lit
                nuptial. Mais Ulysse lui répondit que cela était impossible car il avait lui-même taillé ce lit dans le tronc d’un olivier et avait construit le palais autour de ce lit.
                Pénélope sut alors qu’elle se trouvait en compagnie de son époux parti au combat de longues années auparavant. Ils eurent une fin longue et heureuse.
            </p>
        
    </div>
</div>


<div class="commentairesDIV">
    <form action="index.php?page=mythesLegendes#commentaires" method="post" id="commentaires">
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