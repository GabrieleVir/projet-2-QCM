<?php
	include "php/generateur.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portail</title>
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- début contenu -->
<body>
	<!-- header -->
	<header class="container-fluid header">
		<div class="header-l container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<h1 class="Nom-quizz">Take the quizz </h1>
				</div>
				<!-- ligne séparante -->
				<div class='col-md-12'>
					<hr>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<h2 class='sujet'>Combien maitrisez-vous l'histoire du jeux-vidéo? </h2>
					<p class='descriptif'>Avec le monde du jeux-vidéo qui grandit tous les jours, les gens oublient vite l'histoire qui fait qu'on en est là aujourd'hui. Testez vox connaissances avec cette série de questions sur le monde du jeux-vidéo</p>
				</div>
				
			</div>
		</div>
	</header>
	<!-- header ends -->

	<!-- form -->
	<form method="post" action="php/corrections-affichage.php" class="container-fluid form">
		<div class='form-l container'>
			<div class="col-md-12 input-info">
				<ul class="list-inline">
					<li><label for="nom">Votre nom :</label><input type="text" name="nom" id="nom"></li>
					<li><label for="prenom">Votre prénom :</label><input type="text" name="prenom" id="prenom"></li>
					<li><label for="email">Votre email :</label><input type="email" name="email" id="email"></li>
				</ul>
			</div>
			<ol>
			<!-- questions separator -->
<?php
	afficherQuestions();

?>	
			</ol>
			<div class="col-md-2 col-md-offset-5">
				<input type="submit" class="btn btn-primary" name="submit-test">
			</div>	
		</div>
	</form>
	<!-- form ends -->

	<!-- footer -->
	<footer class="container-fluid footer">
		<div class='container'>
			<div class='row'>
				
			</div>
		</div>		
	</footer>
	<!-- footer ends -->
</body>
</html>