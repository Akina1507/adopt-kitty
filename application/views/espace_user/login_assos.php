<?php include(APPPATH . "views/include/header.php") ?>
<!--------------------------- 
         Vue Connexion 
    --------------------------->
<?php echo form_open('Assos/login_assos') ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
                <h4 class="text-center">Connexion</h4>

                <h6 class="text-center">Associations</h6>
                <br>
                <div class="form-group">
                    <div class="field">
                        <label class="label-login" for="nom_assos">Nom de l'association ou email ?</label>
                        <br>
                        <input class="form-control" type="text" id="nom_assos" name="nom_assos" required>
                        <h6><?php echo form_error('nom_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp_assos">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_assos" name="mdp_assos" required>
                        <h6><?php echo form_error('mdp_assos'); ?></h6>
                    </div>
                </div>
                <br>
                <div class="row justify-content-between">
                    <div class="col">
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
                    </div>
                    <div class="col">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/mail") ?>">Mot de passe oublié ?</a>
                        <a href="<?= base_url("Assos/inscription_assos") ?>">Créer un compte</a>
                    </div>
                </div>
                <div class="col">
                    <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users") ?>">Retour</a>
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