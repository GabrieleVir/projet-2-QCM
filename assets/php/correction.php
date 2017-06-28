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

if (isset($_POST['submit-test']) ) 
{

	$nom = stringSani($_POST['nom']);
	$prenom = stringSani($_POST['prenom']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if(!empty($nom) && !empty($prenom) && !empty($email))
	{
		$note = 0;
		$nQst = 3;
		for ($i=1; $i < 11 ; $i++) 
		{ 
			if($_POST['rep'.$i] == 'correcte') 
			{
				$note++;
			}
			
		}
		$message = "Vous avez répondu juste à ".$note." questions sur ".$nQst;
		mail($email, "Résultat test", $message);
		mail('gabrielevirgabecode@gmail.com', 'Résultat élève', $nom."<br/>".$prenom."<br/>".$message);
		$ok = "tout est ok";
	} else 
	{

		$mess_err = "Veuillez remplir tous les champs";
	}


	
	// Attend pendant un moment
	




}
usleep(100);
$time_end = microtime(true);
$time = $time_end - $time_start;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Questionnaire</title>
</head>
<body>
	<main>
		<header>
			<h1>Take de Quizz</h1>
			<hr>
			<h2>Quel éco-citoyen es-tu?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ullam repudiandae labore veritatis? Sit quidem, dicta magni neque quia, dolor ducimus iste incidunt cupiditate blanditiis perferendis dolore optio! Labore, aut.</p>
			<hr>
		</header>
		<form method="POST" action="assets/php/correction.php">
			<ol>
				<li> 
					<h3>Question A</h3>
					<input type="radio" name ="rep1" value="fausse" id ="question" ><label for="question">réponse A</label><br/>
					<input type="radio" name ="rep1" value="correcte" id ="question2" ><label for="question2"> réponse B</label><br/>
					<input type="radio" name ="rep1" value="fausse" id ="question3"><label for="question3"> réponse C</label><br/>
				</li>
				<hr>
				<li>
					<h3>Question B</h3>
					<input type="radio" name ="rep2" value="correcte" id="question2.1">
					<label for="question2.1"> réponse A</label><br/>
					<input type="radio" name ="rep2" value="fausse" id="question2.2" >
					<label for="question2.2">réponse B</label><br/>
					<input type="radio" name ="rep2" value="fausse" id="question2.3" >
					<label for="question2.3">réponse C</label><br/>
				</li>
				<hr>
				<li>
					<h3>Question C</h3>
					<input type="radio" name ="rep3" id="question3.1">
					<label for="question3.1">réponse A</label><br/>
					<input type="radio" name ="rep3" id="question3.2">
					<label for="question3.2">réponse B</label><br/>
					<input type="radio" name ="rep3" id="question3.3">
					<label for="question3.3">réponse C</label><br/>
				</li>
				<hr>
			</ol>
			<input type="submit" name="">
		</form>
		<?php
		if (isset($_POST['submit-test']) && isset($ok)) 
		{
			echo "Vous avez répondu juste à ".$note." questions sur ".$nQst;
		}
		if (isset($mess_err)) 
		{
			echo $mess_err;
		}	
		?>
	</main>
</body>
</html>