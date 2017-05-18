<?php

function stringSani ($filtredvar) 
{
	$filtredvar = filter_var($filtredvar,FILTER_SANITIZE_STRING);
	return $filtredvar;
}

function verif_rep ($array) {
	foreach ($array as $question => $rep) {
		
	}
}

$options = [
	'nom' => FILTER_SANITIZE_STRING,
	'prenom' => FILTER_SANITIZE_STRING,
	'email' => FILTER_SANITIZE_EMAIL,
	'rep1' => FILTER_SANITIZE_STRING,
	'rep2' => FILTER_SANITIZE_STRING,
	'rep3' => FILTER_SANITIZE_STRING,
	'submit-test' => FILTER_SANITIZE_STRING
];

$array_net = filter_input_array(INPUT_POST, $options);
echo "<pre>";
var_dump($array_net);
echo "</pre>";
if (isset($_POST['submit-test']) ) 
{
	
	//Créer un array qui permet de nettoyer l'array $_Post
	$array_que_rep = [
	"Quel était le nom du premier fps au monde ?" => [
			"T",
			"F1",
			"F2"
			]

	];
	print_r($array_que_rep);
	$nom = stringSani($_POST['nom']);
	$prenom = stringSani($_POST['prenom']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
}
?>