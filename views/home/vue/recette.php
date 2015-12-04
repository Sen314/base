<div class="row">
	<div class="col-md-8 col-lg-offset-2">
		<?php
		/* Test class Famille*/
		$famille = new App_Model_Famille();
		$familles= $famille->getFamille();
		var_dump($familles);

		$activity = new App_Model_Famille();
		$activity= $activity->load(1);
		var_dump($activity);


		/* Test class Arome*/
		$arome = new App_Model_Arome();
		$aromes= $arome->getArome();
		var_dump($aromes);
		$arome = new App_Model_Arome();
		$aromes= $arome->getAromeByFamily(2);
		var_dump($aromes);

		/* Test class Recette*/
		$recette = new App_Model_Recette();
		$recettes= $recette->getRecette();
		$recettes= $recette->getRecetteByUser(1);
		$recettes= $recette->getRecetteByArome(2);
		var_dump($recettes);

		/* Test class Commentaire*/
		$commentaire = new App_Model_Commentaire();
		$commentaires= $commentaire->getCommentaireByRecette(1);
		var_dump($commentaires);
		$commentaires= $commentaire->getCommentaireByUser(1);
		var_dump($commentaires);
		?>
	</div>
</div>