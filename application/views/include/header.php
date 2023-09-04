<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/adopt-kitty/assets/css/style.css">
    <title>Adopt'Kitty</title>
</head>

<style>
    .nav-link {
        color: black;
    }
    .nav-link:hover {
        color: #3d5486;
		background: linear-gradient(to right, #6591a5, #c0c0c0);
    }
</style>

<body>
<div class="container">
	<div class="col d-flex justify-content-center align-items-center ">
        <a href="<?php echo base_url("Users") ?>"><img class="logo" src="/adopt-kitty/assets/img/adopt-kitty-logo" width="200" height="180"></a>	
		<ul class="nav nav-tabs">
  <li class="nav-item">
  <a class="nav-link" href="<?php echo base_url("Users") ?>">Adopter un animal</a>
  </li>
		<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url("Famille1/step1") ?>">Devenir famille d'accueil</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="<?php echo base_url("Annonce/announce") ?>">Poster une annonce</a>
  </li>
</ul>

		<div class="col d-flex flex-column justify-content-center align-items-center ">
						<?php if (isConnected() == false) { ?>
							<a class="btn custom-btn" href="<?php echo base_url("Users/login") ?>">Connexion / Inscription</a>
						<?php } else { ?>
			<div class=" align-items-center"> 
                <!-- Icone connexion -->
                <i class="bi bi-person-circle"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
            <?php
echo $this->session->userdata("nom") . " " . $this->session->userdata("prenom");
?>

		</div>
							<a class="btn custom-btn" href="<?php echo base_url("Users/deconnect") ?>">Deconnexion</a>	
						<?php } ?>
    </div>
</div>
</body>
		