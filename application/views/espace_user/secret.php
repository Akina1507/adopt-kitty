<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/projet-codeigniter/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Adopt'Kitty</title>
</head>

<body>
	<div class="row">
		<div class="navbar">
			<div class="col-md-4">
				<div class="col-md-6 offset-md-3">
					<a href=<?php
							echo base_url("Users") ?>><img class="logo" src="/projet-codeigniter/assets/img/LogoAdoptKitty"></a>

				</div>
			</div>

			<div class="col-md-8">
				<div class="row  justify-content-end">
					<!-- Colonnes : row = toujours 12 -->
					<div class="col-md-6 offset-md-2">
						<div class="btn">
							<a href="<?php echo base_url("Users/deconnect") ?>">Se deconnecter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	</div>

	<div class="row">
		<img class="background" src="assets/img/fond" alt="">
		<div class="position-absolute bottom-0 start-0  padding-10-20 d-flex flex-column justify-content-center align-items-center">
			<h4 class="pb-3 text-center">Je souhaite...</h4>
			<div class="btn">
				<div class="d-flex flex-column text-center justify-content-between">
					<a href="<?php
								echo base_url("Pensionnaire/recherche") ?>">Chercher un animal
					</a>
					<br>
					<a href="<?php
								echo base_url("Pensionnaire/famille") ?>">Devenir famille d'accueil
					</a>
					<br>
					<a href="<?php
								echo base_url("Pensionnaire/annonce") ?>">Poster une annonce
					</a>
					<!-- 
                  Probleme de lien avec les boutons : on fait retour et on est oblige de cliquer 2 fois sur le bouton
                   car on va sur la page ou on affiche la page home et ensuite la page etre connecté  -->
				</div>
			</div>
		</div>
	</div>

</body>

</html>

</body>

</html>