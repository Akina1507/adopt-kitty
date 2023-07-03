<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/projet-codeigniter/assets/css/customms.css">

<!-- ... Formulaire de la première étape ... -->

<?php echo form_open('Famille/step1'); ?>

<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pb-2 bg-white bordered">
                <h2>Étape 1</h2>
                <div class="inputBox">
                    <label for="nom_user">Nom :</label>
                    <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required value="<?= set_value('nom_user') ?>">
                    <h4><?= form_error('nom_user'); ?></h4>
                </div>
                <div class="inputBox">
                    <label for="prenom_user">Prenom :</label>
                    <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prenom" required value="<?= set_value('prenom_user') ?>">
                    <h4><?= form_error('prenom_user'); ?></h4>
                </div>
                <div class="inputBox">
                    <label for="age_user">Age :</label>
                    <input class="form-control" type="number" name="age_user" id="age_user" placeholder="Votre âge" required value="<?= set_value('age_user') ?>">
                    <h4><?= form_error('age_user'); ?></h4>
                </div>
                <div class="inputBox">
                    <label for="email_user">Email :</label>
                    <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email" required value="<?= set_value('email_user') ?>">
                    <h4><?= form_error('email_user'); ?></h4>
                </div>

                <div class="inputBox">
                    <label for="adresse_user">Adresse :</label>
                    <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required value="<?= set_value('adresse_user') ?>">
                    <h4><?= form_error('adresse_user'); ?></h4>
                </div>

                <div class="inputBox">
                    <label for="ville_user">Ville :</label>
                    <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required value="<?= set_value('ville_user') ?>">
                    <h4><?= form_error('ville_user'); ?></h4>
                </div>

                <div class="inputBox">
                    <label for="codepostal_user">Code postal :</label>
                    <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required value="<?= set_value('codepostal_user') ?>">
                    <h4><?= form_error('codepostal_user'); ?></h4>
                </div>

                <div class="inputBox">
                    <label for="tel_user">Téléphone :</label>
                    <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numero de telephone" required value="<?= set_value('tel_user') ?>">
                    <h4><?= form_error('tel_user'); ?></h4>
                </div>
                <button type="submit" class="btn btn-primary">Étape suivante</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<script src="/projet-codeigniter/assets/js/script.js"></script>