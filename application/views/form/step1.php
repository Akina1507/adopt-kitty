<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form" id="Upemultistepsform" action="<?= site_url('Famille2/step2'); ?>" method="post">
                <div class="step-header d-flex mb-2 justify-content-center">
                    <span class="steplevel active">Etape 1</span>
                    <span class="steplevel">Etape 2</span>
                    <span class="steplevel">Etape 3</span>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nom_user">Nom :</label>
                            <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required value="<?= set_value('nom_user') ?>">
                            <h6><?= form_error('nom_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prenom_user">Prénom :</label>
                            <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom" required value="<?= set_value('prenom_user') ?>">
                            <h6><?= form_error('prenom_user'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="age_user">Age :</label>
                            <input class="form-control" type="number" name="age_user" id="age_user" placeholder="Votre âge" required value="<?= set_value('age_user') ?>">
                            <h6><?= form_error('age_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_user">Email :</label>
                            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email" required value="<?= set_value('email_user') ?>">
                            <h6><?= form_error('email_user'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="adresse_user">Adresse :</label>
                            <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required value="<?= set_value('adresse_user') ?>">
                            <h6><?= form_error('adresse_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ville_user">Ville :</label>
                            <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required value="<?= set_value('ville_user') ?>">
                            <h6><?= form_error('ville_user'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="codepostal_user">Code postal :</label>
                            <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required value="<?= set_value('codepostal_user') ?>">
                            <h6><?= form_error('codepostal_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel_user">Téléphone :</label>
                            <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numéro de téléphone" required value="<?= set_value('tel_user') ?>">
                            <h6><?= form_error('tel_user'); ?></h6>
                        </div>
                    </div>
                </div>
            
   


               
            </div>
        </div>
    </div>
</div>



                
                <div class="step">
                    <h6>Félitation, vous avez bien rempli notre formulaire.
                        <br>A présent vous aller être rediriger vers notre page d'accueil
                    </h6>
                
                </div>
                <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="suivBtn" type="submit">Suivant</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/adopt-kitty/assets/js/test.js"></script>