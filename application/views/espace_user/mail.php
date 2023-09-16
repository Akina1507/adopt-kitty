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
                    <h6>Vous allez recevoir un lien pour votre nouveau mot de passe sur votre boite mail !</h6>
                    <?php header('refresh:10;url=' . base_url('Users/accueil')); ?>
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
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/accueil") ?>">Retour</a>
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
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