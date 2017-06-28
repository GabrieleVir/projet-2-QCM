<?php
	include "correction.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Résultat du formulaire</title>

		<!-- css -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class='reponse-layout container'>
		<div class='row'>
			<div class='col-md-3 col-md-offset-4'>
				<section class="affichage">
					<h1> Votre résultat : </h1>				
					<p class='resultat'><?php affichagePoints(); ?> </p>	
				</section>
			</div> 
		</div>
	</div>
</body>
</html>