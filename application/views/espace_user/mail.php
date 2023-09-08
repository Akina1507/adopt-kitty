<?php
include(APPPATH . "views/include/header.php")
?>

<!--------------------------- 
     Recuperation mot de passe + Envoie de mail 
              --------------------------------->
<?php echo form_open() ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
                <h4 class="text-center">Récupération<br>de votre mot de passe</h4>
                <br>
                <?php if (isset($popup) && $popup === true) { ?>
                    <h5>Vous allez recevoir votre nouveau mot de passe sur votre boite email !<br>Vous allez etre redirigé sur le formulaire de connexion</h5>
                    <?php header('refresh:1;url=' . base_url('Users/login')); ?>
                <?php } ?>
                <?php if (isset($popupError) && $popupError === true) { ?>
                    <h5>L'email saisi n'existe pas dans la base de données, Réessayez.</h5>
                    <!-- Autre contenu de la deuxième pop-up -->
                <?php } ?>

                <div class="form-group">
                    <div class="field">
                        <label class="label-login" for="email">Email</label>
                        <br>
                        <input class="form-control" type="email" id="email" name="email" required>
                        <h4><?php echo form_error('email'); ?></h4>
                    </div>
                </div>
                <br>
                <div class="row justify-content-between">
                    <div class="col">
                        <input class="btn send-btn" type="submit" name="envoyer">
                    </div>
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