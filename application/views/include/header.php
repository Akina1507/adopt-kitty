<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/projet-codeigniter/assets/css/customms.css">
	<title>Adopt'Kitty</title>
</head>

<body>
	<div>
		<div class="row row-col-lg-5 g-2 g-lg-3">

			<div class="col">
				<div class="row">
					<a href=<?php
							echo base_url("Users") ?>><img class="logo" src="/projet-codeigniter/assets/img/LogoAdoptKitty" width="250" height="150"></a>
				</div>
			</div>

			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col d-flex align-items-center">
				<div class="row justify-content-center ">
					<!-- Colonnes : row = toujours 12 -->
					<div class="col text-center ">

						<?php if (isConnected() == false) { ?>
							<a class="btn custom-btn" href="<?php echo base_url("Users/login") ?>">Connexion / Inscription</a>
						<?php } else { ?>
							<a class="btn custom-btn" href="<?php echo base_url("Users/deconnect") ?>">Deconnexion</a>
						<?php } ?>

					</div>
				</div>
			</div>

		</div>
	</div>