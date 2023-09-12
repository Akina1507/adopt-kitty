<?php include(APPPATH . "views/include/header.php") ?>

<!--------------------------- 
         Vue Connexion 
    --------------------------->

<?php echo form_open('Users/login') ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
                <h4 class="text-center">Connexion</h4>

                <h6 class="text-center">Utilisateurs</h6>
                <div class="form-group">
                    <div class="field">
                        <label class="label-login" for="pseudo">Pseudo ou email ?</label>
                        <br>
                        <input class="form-control" type="text" id="pseudo" name="pseudo" required>
                        <h6><?php echo form_error('pseudo'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp" name="mdp" required>
                        <h6><?php echo form_error('mdp'); ?></h6>
                    </div>
                </div>
                <br>
                <div class="row justify-content-between">
                    <div class="col">
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
                    </div>
                    <div class="col">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/mail") ?>">Mot de passe oublié ?</a>
                        <a href="<?= base_url("Users/inscription") ?>">Créer un compte</a>
                    </div>
                </div>
                <div class="col">
                    <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/home") ?>">Retour</a>
                </div>
                <?php echo form_close(); ?>
                <?= form_error('formulaire'); ?>
            </div>
        </div>
    </div>
</div>
<?php
include(APPPATH . "views/include/footer.php")
?>