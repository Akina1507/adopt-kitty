<?php include(APPPATH . "views/include/header.php") ?>

<!--------------------------- 
         Vue Connexion 
    --------------------------->
<?php echo form_open() ?>
<div class=" fond d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">


                <h4 class="text-center">Modifiez votre mot de passe</h4>
                <div class="form-group">
                    <br>
                    <div class="field">
                        <label class="label-login" for="mdp">Nouveau mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp" name="mdp" required>
                        <h6><?php echo form_error('mdp'); ?></h6>
                        <label class="label-login" for="mdp_confirm">Confirmation de votre mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_confirm" name="mdp_confirm" required>
                        <h6><?php echo form_error('mdp_confirm'); ?></h6>
                    </div>
                    <?php if (isset($popup) && $popup === true) { ?>
                        <h6>Vous pouvez dès maintenant vous connecter avec votre nouveau mot de passe</h6>
                        <?php header('refresh:5;url=' . base_url('Users/accueil')); ?>
                    <?php } ?>
                    <?php if (isset($popupError) && $popupError === true) { ?>
                        <h5>L'email saisi n'existe pas dans la base de données, Réessayez.</h5>
                        <!-- Autre contenu de la deuxième pop-up -->
                    <?php } ?>
                </div>
                <br>
                <div class="row justify-content-between">
                    <div class="col d-flex justify-content-between">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/accueil") ?>">Retour</a>
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
                    </div>
                </div>
                <?php echo form_close(); ?>
                <?= form_error('formulaire'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include(APPPATH . "views/include/footer.php")
?>