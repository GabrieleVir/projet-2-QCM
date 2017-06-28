<?php
function afficherQuestions () {
	$question_array = [
		"Quel était le nom du premier fps au monde" => [
			"T" => "Battlezone",
			"F1"=> "Doom",
			"F2"=> "Wolfenstein 3D"
		],
		"Quel est le jeu avec le plus grand nombre d'utilisateurs ?" => [
			"T" => "League of legends",
			"F1"=> "Counter-strike: GO",
			"F2"=> "World of warcraft"
		],
		"Quel pays donne le plus d'importance aux E-sports ?" => [
			"T" => "La Corée du Nord",
			"F1"=> "Le Japon",
			"F2"=> "Les Etats-unis"
		]
	];
	$i = 0;
	foreach ($question_array as $questions => $reponses) :
		$u = 1;
		shuffle($reponses);
?>


<div class='col-md-6 col-md-offset-3'>
	<li class="taille-quest"> 
	<h3 class="questions"><?php echo $questions ?></h3>
</div>
		<div class='row'>
			<div class='question-l col-md-4 col-md-offset-3'>
				<ol>

<?php
		foreach ($reponses as $valeur => $reponse):
?>

						<li class="list-question">
							<div class="radio">
								<input type="radio" name="rep<?=$i;?>" id="rep<?=$i;?>.<?= $u;?>" value="<?=$valeur?>">
								<label class="reponse-l" for="rep<?=$i;?>.<?=$u;?>"><?=$reponse?></label>
							</div>
						</li>
<?php
			$u++;
		endforeach;
?>			
				</ol>			
			</div>							
		</div>
	</li>
		<div class='col-md-12'>
			<hr>
		</div>

<?php

		$i++;
	endforeach;
}
?>

