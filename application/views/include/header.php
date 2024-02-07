<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Adopt'Kitty</title>
</head>

<body>
    <div class="container">
        <div class="col d-flex justify-content-center align-items-center ">
            <a href="<?= base_url("Users") ?>"><img class="logo" src="/adopt-kitty-1/assets/img/adopt-kitty-logo" width="200" height="180"></a>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("Users") ?>">Adopter un animal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("Famille/etapes") ?>">Devenir famille d'accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("Annonce/annonce") ?>">Poster une annonce</a>
                </li>
            </ul>

            <div class="col d-flex flex-column justify-content-center align-items-center ">
                <?php if (isConnected() == false) { ?>
                    <a class="btn custom-btn" href="<?= base_url("Users/accueil") ?>">Connexion / Inscription</a>
                <?php } else { ?>
                    <div class=" align-items-center">
                        <!-- Icone connexion -->
                        <i class="bi bi-person-circle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <?= $this->session->userdata("nom") . " " . $this->session->userdata("prenom");
                    ?>


            </div>
            <a class="btn custom-btn" href="<?= base_url("Users/deconnect") ?>">Deconnexion</a>
        <?php } ?>
        </div>
    </div>
    </div>