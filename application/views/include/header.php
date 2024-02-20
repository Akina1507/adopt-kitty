<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <title><?= $titre ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="<?= base_url("assets/img/adopt-kitty-logo.png") ?>" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url("") ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accès rapide
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url("Adopt/adoption") ?>">Je souhaite adopter un animal</a></li>
                <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= base_url("/Famille/etapes") ?>">Devenir bénévole</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">FAQ</a></li>
            </ul>
          </li>
        </ul> 
        <ul class="navbar-nav">
          <?php if (isConnected() == false) { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url("Users/login") ?>">Connexion / Inscription</a>
            </li>
          <?php } else { ?>
            <div class=" align-items-center">
              <!-- Icone connexion -->
              <i class="bi bi-person-circle"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
            </div>
            <div>
              <?= $this->session->userdata("nom") . " " . $this->session->userdata("prenom");?>
              <a href="<?= base_url("Users/deconnect") ?>">Deconnexion</a>
            </div>
          <?php } ?>
          </div>
        </ul>
      </div>
    </div>
  </nav> 