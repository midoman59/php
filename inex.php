<style>
	p{width: 500px;}

</style>
<?php
//// Fonction remplacant les accents par leur lettre non accentué
//function replaceAccent($str) {
//	$str = htmlentities($str, ENT_COMPAT, "UTF-8"); // Convertit tous les caractères éligibles en entités HTML
//	$str = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/', '$1', $str);
//	return html_entity_decode($str); // Convertit toutes les entités HTML en caractères normaux
//}
//
//echo "<form method='GET' action=''>"
// . "<p style='width:300px;'>Nom : <input type='text' name='nom' id='nom'></p>"
// . "<p style='width:300px;'>Nom de jeune fille : <input type='text' name='nJF' id='nJF'></p>"
// . "<p style='width:300px;'>Prenom : <input type='text' name='prenom' id='prenom'></p>"
// . "<fieldset><legend>adresse</legend>"
// . "<p>Numero : <input type='text' name='numero' id='numero'></p>"
// . "<p>Type de voix : <input type='text' name='voix' id='voix'>"
// . "Nom de rue : <input type='text' name='rue' id='rue'></p>"
// . "<p>CP : <input type='text' name='cp' id='cp'>"
// . "Ville : <input type='text' name='ville' id='ville'><p>"
// . "</fieldset>"
// . "<input type='submit' value='valider' name='form'>"
// . "</form>";
//
//$nom = isset($_GET['nom']) ? $_GET['nom'] : FALSE;
//$nJF = filter_input(INPUT_GET, 'nJF');
//$prenom = filter_input(INPUT_GET, 'prenom');
//$numero = filter_input(INPUT_GET, 'numero');
//$voix = filter_input(INPUT_GET, 'voix');
//$rue = filter_input(INPUT_GET, 'rue');
//$cp = filter_input(INPUT_GET, 'cp');
//$ville = filter_input(INPUT_GET, 'ville');
//
//if (!isset($nom, $nJF, $prenom)) {
//	echo "<style>"
//	. "#prenom{border: none}"
//	. "</style>";
//} else {
//
//	if (preg_match("#^[A-Za-z ]{2,}$#", $prenom)) {
//		echo "<style>"
//		. "#prenom{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#prenom{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[A-Za-z ]{2,}$#", $nom)) {
//		echo "<style>"
//		. "#nom{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#nom{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[A-Za-z ]{2,}$#", $nJF)) {
//		echo "<style>"
//		. "#nJF{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#nJF{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[0-9]{1,3}$#", $numero)) {
//		echo "<style>"
//		. "#numero{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#numero{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[-a-zA-Z]{3,}$#", $voix)) {
//		echo "<style>"
//		. "#voix{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#voix{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[a-zA-Z]{3,}$#", $voix)) {
//		echo "<style>"
//		. "#voix{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#voix{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[-a-zA-Z]{3,}$#", $rue)) {
//		echo "<style>"
//		. "#rue{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#rue{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[0-9]{5}$#", $cp)) {
//		echo "<style>"
//		. "#cp{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#cp{border: 1px solid red}"
//		. "</style>";
//	}
//	if (preg_match("#^[-a-zA-Z]{3,}$#", $ville)) {
//		echo "<style>"
//		. "#ville{border: 1px solid green}"
//		. "</style>";
//	} else {
//		echo "<style>"
//		. "#ville{border: 1px solid red}"
//		. "</style>";
//	}
//}
//$amine='abcd123';
//echo preg_replace('/([A-Z])/i','*', $amine);
//echo'<br>';
//echo preg_replace('/([A-Z])/i','* $1 *', $amine);
//echo'<br>';
//echo preg_replace('/([a-z]{1,})\.([a-z]{2,3})/i','site:$1 ext:$2', 'www.google.fr');
//echo '<br>';
//echo preg_replace('/^(https?:\/\/)?([a-z\.]{1,})\.([a-z]{2,3})$/i','protocole:$1 domaine:$2 ext:$3' , 'https://google.fr');
//echo '<br>';
//echo preg_replace('/^(?:https?:\/\/)?([a-z\.]{1,})\.([a-z]{2,3})$/i','protocole:$1 domaine:$2 ext:$3' , 'https://google.fr');
//echo '<br>';
//echo preg_replace('/([a-z]{1,})\.([a-z]{1,})\.([a-z]{1,})/i','word:$1 site:$2 ext:$3', 'www.google.fr');
//echo'<br>';
//echo preg_replace('/^((a)(b))((c)(d))/i','$2 $3 $5 $6 $0', 'abcd1');
//echo'<br>';
//echo preg_replace('/^(ab+)(ab*) /i','$2 $3 $5 $6 $0', 'abcd1');
//echo'<br>';
//echo str_replace(array("a","b","c","d"),array("e","f","g","h"), $amine);
//
//instruction 1
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php

// Fonction remplacant les accents par leur lettre non accentué
function replaceAccent($str) {
	$str = htmlentities($str, ENT_COMPAT, "UTF-8"); // Convertit tous les caractères éligibles en entités HTML
	$str = preg_replace('/&([a-zA-Z])(uml|acute|grave|circ|tilde);/', '$1', $str);
	return html_entity_decode($str); // Convertit toutes les entités HTML en caractères normaux
}

// Champ nom
$nom = isset($_GET['nom']) ? $_GET['nom'] : false;
$nom_border = $nom && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($nom)) ? 'green' : 'red';

// Champ prenom
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : false;
$prenom_border = $prenom && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($prenom)) ? 'green' : 'red';
?>
		<form action="" method="GET">
			Nom : 
			<input name="nom" type="text" style="border:1px solid <?= (isset($_GET['nom']) ? $nom_border : 'grey'); ?>" value="<?= $nom; ?>" />
			<?= replaceAccent($nom); ?>
			<br /><br />

			Prenom : 
			<input name="prenom" type="text" style="border:1px solid <?= (isset($_GET['prenom']) ? $prenom_border : 'grey'); ?>" value="<?= $prenom; ?>" />
			<?= replaceAccent($prenom); ?>
			<br /><br />

			<button>SEND</button>
			<?php
			if ($prenom && $nom && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($prenom)) && preg_match('#^([-a-zA-Z\']){2,}$#', replaceAccent($nom))) {
				$fp = fopen("donnees.txt", "a+");
				fputs($fp, 'nom : ' . $nom . ' prenom : ' . $prenom . "\r\n");
				fclose($fp);
				exit();
			}
			?>
		</form>
	</body>
</html>



<?php
//$fp=  fopen("donnees.txt", "r+");
//
////instruction 2 
//$contenu_du_fichier=fgets($fp, 255);
//$contenu_du_fichier=  intval($contenu_du_fichier);
//echo $contenu_du_fichier;
//$contenu_du_fichier=$contenu_du_fichier+1;
//echo $contenu_du_fichier;
//fseek($fp, 0);
//fputs($fp,$contenu_du_fichier);
//fclose($fp);
exit();







////instruction4
//
//echo 'notre fichier contient: '.$contenu_du_fichier;
//
//while($contenu_du_fichier=fgets($fp, 255))
//{
//	echo $contenu_du_fichier;
//}
////instruction3
//
//fclose($fp);
//exit();
//
?>

