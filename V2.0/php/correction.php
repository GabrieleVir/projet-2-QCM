<?php

function stringSani ($filtredvar) 
{
	$filtredvar = filter_var($filtredvar,FILTER_SANITIZE_STRING);
	return $filtredvar;
}



//Créer un array qui permet de nettoyer l'array $_Post

$options = [
	'nom' => FILTER_SANITIZE_STRING,
	'prenom' => FILTER_SANITIZE_STRING,
	'email' => FILTER_SANITIZE_EMAIL,
	'rep1' => FILTER_SANITIZE_STRING,
	'rep2' => FILTER_SANITIZE_STRING,
	'rep3' => FILTER_SANITIZE_STRING,
	'submit-test' => FILTER_SANITIZE_STRING
];

//filter_input_array prend comme premier argument quel input c'est et en second l'array avec tous les filtres sanitize
$array_net = filter_input_array(INPUT_POST, $options);
$points = 0;

if (isset($_POST['submit-test']) ) {
	
	$array_que_rep = [
		"Quel était le nom du premier fps au monde ?" => [
			"Battlezone",
			"Doom",
			"Wolfenstein 3D"
			],
		"Quel est le jeu avec le plus grand nombre d'utilisateur ?"	=> [
			"Couter-strike: GO",
			"World of Warcraft",
			"League of legends"
			],	
		"Quel pays donne le plus d'importance aux E-sports ?" => [
			"Les Etats-unis",
			"Le Japon",
			"La Corée du Sud"
			]

	];

	//Mélanger les réponses pour que chaque fois c'est diffèrent
	foreach ($array_que_rep as $questions => $reps) {
		shuffle($reps);
	}

	//Boucle qui permet d'avoir la note finale
	for($i = 1; $i <= count($array_que_rep); $i++) {
		if($array_net['rep' . $i] == 'T') {
			$points++;
		}
	}

	//Message personnalisé en fonction de la note
	function affichagePoints(){
		global $points, $array_que_rep;
		if($points > 2) {
			echo "Vous avez " . $points . " sur " . count($array_que_rep) . ". BRAVO ! ";
		} else {
			echo "Vous avez " . $points . " sur " . count($array_que_rep);
		}
	}
}

?>
