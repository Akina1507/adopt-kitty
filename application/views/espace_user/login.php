<?php include(APPPATH . "views/include/header.php") ?>

<!--------------------------- 
         Vue Connexion 
    --------------------------->
<body>
    <?php echo form_open('Users/login') ?>
    <div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 p-5 container-login bg-white bordered">
                    <h4 class="text-center">Connectez-vous</h4>
                    <br>
                    <div class="form-group">
                        <div class="field">
                            <label class="label-login" for="pseudo">Pseudo</label>
                            <br>
                            <input class="form-control" type="text" id="pseudo" name="pseudo" required>
                            <h4><?php echo form_error('pseudo'); ?></h4>
                            <br>
                            <label class="label-login" for="mdp">Mot de passe</label>
                            <br>
                            <input class="form-control" type="password" id="mdp" name="mdp" required>
                            <h4><?php echo form_error('mdp'); ?></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-between">
                        <div class="col">
                            <input class="btn send-btn" type="submit" name="envoyer">
                        </div>
                        <div class="col">
                            <a class="btn send-btn" href="<?= base_url("Users/mail") ?>">Mot de passe oublié ?</a>
                            <a href="<?= base_url("Users/inscription") ?>">Créer un compte</a>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                    <?php echo form_error('formulaire'); ?>
                </div>
            </div>
        </div>
    </div>
</body>