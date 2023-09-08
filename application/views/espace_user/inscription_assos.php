<?php include(APPPATH . "views/include/header.php") ?>

<!--------------------------- 
   Inscription utilisateurs + Pop up message succès 
                        --------------------------->

<?php echo form_open() ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
                <h4 class="text-center">Inscription</h4>
                <h6 class="text-center">Associations</h6>
                <br>
                <?php if (isset($popup) && $popup === true) { ?>
                    <div class="popup">
                        <h5><?php echo $success_message; ?></h5>
                    </div>
                    <?php header('refresh:1;url=' . base_url('Users/login_assos')); ?>
                <?php } ?>
                <div class="form-group">
                    <div class="field">
                        <label class="label-login" for="nom_assos">Nom de l'association</label>
                        <br>
                        <input class="form-control" type="text" id="nom_assos" name="nom_assos" required>
                        <h4><?php echo form_error('nom_assos'); ?></h4>
                        <label class="label-login" for="pseudo">Adresse</label>
                        <br>
                        <input class="form-control" type="text" id="adresse_assos" name="adresse_assos" required>
                        <h4><?php echo form_error('adresse_assos'); ?></h4>
                        <label class="label-login" for="ville_assos">Ville</label>
                        <br>
                        <input class="form-control" type="number" id="ville_assos" name="ville_assos" required>
                        <h4><?php echo form_error('ville_assos'); ?></h4>
                        <label class="label-login" for="codepostal_assos">Code postal</label>
                        <br>
                        <input class="form-control" type="text" id="codepostal_assos" name="codepostal_assos" required>
                        <h4><?php echo form_error('codepostal_assos'); ?></h4>
                        <label class="label-login" for="email">Adresse email</label>
                        <br>
                        <input class="form-control" type="email" id="email" name="email" required>
                        <h4><?php echo form_error('email'); ?></h4>

                        <label class="label-login" for="tel_assos">Numéro de téléphone</label>
                        <br>
                        <input class="form-control" type="text" id="tel_assos" name="tel_assos" required>
                        <h4><?php echo form_error('tel_assos'); ?></h4>
                        <label class="label-login" for="mdp">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp" name="mdp" required>
                        <h4><?php echo form_error('mdp'); ?></h4>
                        <br>
                        <label class="label-login" for="mdp_confirm">Confirmation de votre mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_confirm" name="mdp_confirm" required>
                        <h4><?php echo form_error('mdp_confirm'); ?></h4>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <div class="row justify-content-between">
                    <div class="col">
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="connexion">
                    </div>
                </div>
                <div class="col">
                    <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/home") ?>">Retour</a>
                </div>
                <?php echo form_close(); ?>
                <?php echo form_error('formulaire'); ?>
            </div>
        </div>
    </div>
</div>
<?php
include(APPPATH . "views/include/footer.php")
?>