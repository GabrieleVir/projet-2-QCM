<?php
function stringSani ($filtredvar) 
{
	$filtredvar = filter_var($filtredvar,FILTER_SANITIZE_STRING);
	return $filtredvar;
}	

if (isset($_POST['submit-test']) ) 
{

	$nom = stringSani($_POST['nom']);
	$prenom = stringSani($_POST['prenom']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if(!empty($nom) && !empty($prenom) && !empty($email))
	{
		$note = 0;
		$nQst = 1;
		for ($i=1; $i < 2 ; $i++) 
		{ 
			if($_POST['rep'.$i] == 'correcte') 
			{
				$choixBon = "checked";
				$note++;
			}elseif ($_POST['rep'.$i] == 'fausse1') 
			{
				$choixMau1 = "checked";
				$erreur1 = "erreur";
			}elseif ($_POST['rep'.$i] == 'fausse2')
			{
				$choixMau2 = "checked";
				$erreur2 = "erreur";
			}
			
		}
	//	$message = "Vous avez répondu juste à ".$note." questions sur ".$nQst;
	//	mail($email, "Résultat test", $message);
	//	mail('gabrielevirgabecode@gmail.com', 'Résultat élève', $nom."<br/>".$prenom."<br/>".$message);
	//	$ok = "tout est ok";
	} else 
	{

		//$mess_err = "Veuillez remplir tous les champs";
	}
	print_r($_POST);
}
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
	<main class="container">
		<header>
			<h1 id="title">Correction</h1>
			<hr>
			<h2 class="sujet1">Quel éco-citoyen es-tu?</h2>
			<hr>
		</header>
		<form method="POST" action="../php/correction2.php" id="questionnaire">
			
			<ol>
				<li> 
					<h3>1.Question:</h3>
					<div>
						<ol>
							<li>
								<span class="<?php if(isset($erreur1)) {echo $erreur;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question" <?php if (isset($choixMau1)) {echo $choixMau1;}?>><label for="question">réponse A</label>
								</span>
							</li>
							<li>
								<span class="green">
									<input type="radio" name ="rep1" value="correcte" id ="question2" ><label for="question2" > réponse B</label>
								</span>
							</li>
							<li>
								<span class="span-l <?php if(isset($erreur2)) {echo $erreur2;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question3" <?php if (isset($choixMau2)) {echo $choixMau2;}?>><label for="question3"> réponse C</label>
							</li>
								</span>
							
							
						</ol>
					</div>
					<hr>
				</li>
				<li> 
					<h3>1.Question:</h3>
					<div>
						<ol>
							<li>
								<span class="<?php if(isset($erreur1)) {echo $erreur;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question" <?php if (isset($choixMau1)) {echo $choixMau1;}?>><label for="question">réponse A</label>
								</span>
							</li>
							<li>
								<span class="green">
									<input type="radio" name ="rep1" value="correcte" id ="question2" ><label for="question2" > réponse B</label>
								</span>
							</li>
							<li>
								<span class="span-l <?php if(isset($erreur2)) {echo $erreur2;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question3" <?php if (isset($choixMau2)) {echo $choixMau2;}?>><label for="question3"> réponse C</label>
							</li>
								</span>
							
							
						</ol>
					</div>
					<hr>
				</li>
				<li> 
					<h3>1.Question:</h3>
					<div>
						<ol>
							<li>
								<span class="<?php if(isset($erreur1)) {echo $erreur;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question" <?php if (isset($choixMau1)) {echo $choixMau1;}?>><label for="question">réponse A</label>
								</span>
							</li>
							<li>
								<span class="green">
									<input type="radio" name ="rep1" value="correcte" id ="question2" ><label for="question2" > réponse B</label>
								</span>
							</li>
							<li>
								<span class="span-l <?php if(isset($erreur2)) {echo $erreur2;} ?>">
									<input type="radio" name ="rep1" value="fausse" id ="question3" <?php if (isset($choixMau2)) {echo $choixMau2;}?>><label for="question3"> réponse C</label>
							</li>
								</span>
							
							
						</ol>
					</div>
					<hr>
				</li>
			</ol>
		</form>
	</main>
</body>
</html>