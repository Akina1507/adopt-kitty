<?php
include(APPPATH . "views/include/header.php")
?>

<div class="row">
	<img class="background" src="assets/img/fond" alt="">
	<div class=" position-absolute bottom-0 start-0  padding-10-20 d-flex flex-column justify-content-center align-items-center">



		<div class="encadre-color d-flex flex-column text-center justify-content-between bordered">
			<h4 class="pb-3 text-center">Je souhaite...</h4>
			<a class="btn custom-btn" href="<?php
											echo base_url("Pensionnaire/recherche") ?>">Chercher un animal
			</a>
			<br>
			<a class="btn custom-btn" href="<?php
											echo base_url("Famille1/step1") ?>">Devenir famille d'accueil
			</a>
			<br>
			<a class="btn custom-btn" href="<?php
											echo base_url("Annonce/annonce1") ?>">Poster une annonce
			</a>
		</div>

	</div>
</div>

</body>

</html>