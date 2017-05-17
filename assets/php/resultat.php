<?php
//test vitesse script
$time_start = microtime(true);

function stringSani ($filtredvar) 
{
	$filtredvar = filter_var($filtredvar,FILTER_SANITIZE_STRING);
	return $filtredvar;
}	

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
/*
if (isset($_POST['submit-test']))
{
	$note = 0;
	if($_POST['rep1'] == "correcte") 
	{
		$note = $note + 1;
	} else 
	{
		$note = $note;
	}
	if ($_POST['rep2'] == "correcte") 
	{
		$note = $note + 1;
	} else
	{
		$note = $note;
	}
	if ($_POST['rep3'] == "correcte") 
	{
		$note = $note + 1;
	} else
	{
		$note = $note;
	}
	echo $note."/3";
} 
*/

if (isset($_POST['submit-test']) && $_POST['submit-test'] == "Envoyer vos réponses(2nd test)") 
{
	//Donne une valeur même si c'est vide
	for ($i=1; $i < 11; $i++) { 
		$_POST['rep'.$i] = '';
	}
	$nom = stringSani($_POST['nom']);
	$prenom = stringSani($_POST['prenom']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if(!empty($nom) && !empty($prenom) && !empty($email))
	{
		$note = 0;
		$nQst = 10;
		for ($i=1; $i < 11 ; $i++) 
		{ 
			if($_POST['rep'.$i] == 'correcte') 
			{
				$note++;
			}
			
		}
		$message = "Vous avez répondu juste à ".$note." questions sur ".$nQst." pour le deuxième test";
		mail($email, "Résultat test", $message);
		mail('gabrielevirgabecode@gmail.com', 'Résultat élève', $nom."<br/>".$prenom."<br/>".$message);
		$ok = "tout est ok";
	} else 
	{

		$mess_err = "Veuillez remplir tous les champs";
	}
}

if (isset($_POST['submit-test']) && $_POST['submit-test'] == "Envoyer vos réponses(1er test)") 
{
//Donne une valeur même si c'est vide
	for ($i=1; $i < 11; $i++) { 
		$_POST['rep'.$i] = '';
	}

	$nom = stringSani($_POST['nom']);
	$prenom = stringSani($_POST['prenom']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if(!empty($nom) && !empty($prenom) && !empty($email))
	{
		$note = 0;
		$nQst = 10;
		for ($i=1; $i < 11 ; $i++) 
		{ 
			if($_POST['rep'.$i] == 'correcte') 
			{
				$note++;
			}
			
		}
		$message = "Vous avez répondu juste à ".$note." questions sur ".$nQst." pour le premier test";
		mail($email, "Résultat test", $message);
		mail('gabrielevirgabecode@gmail.com', 'Résultat élève', $nom."<br/>".$prenom."<br/>".$message);
		$ok = "tout est ok";
	} else 
	{

		$mess_err = "Veuillez remplir tous les champs";
	}
}

usleep(100);
$time_end = microtime(true);
$time = $time_end - $time_start;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style-php.css">
	<title>Questionnaire</title>
</head>
<body>
	<main>
	<header>
		<h1>Correction du questionnaire</h1>
	</header>
		<?php
		if (isset($_POST['submit-test']) && isset($ok)) 
		{
			echo $message;
		}
		if (isset($mess_err)) 
		{
			echo $mess_err;
		}	
		?>
	</main>
</body>
</html>