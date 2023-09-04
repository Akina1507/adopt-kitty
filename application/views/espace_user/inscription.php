<?php include(APPPATH . "views/include/header.php") ?>

<!--------------------------- 
   Inscription utilisateurs + Pop up message succès 
                        --------------------------->
<body>
    <?php echo form_open() ?>
    <div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 p-5 container-login bg-white bordered">
                    <h4 class="text-center">Inscrivez-vous</h4>
                    <br>
                    <?php if (isset($popup) && $popup === true) { ?>
                        <div class="popup">
                            <h5><?php echo $success_message; ?></h5>
                        </div>
                        <?php header('refresh:1;url=' . base_url('Users/login')); ?>
                    <?php } ?>
                    <div class="form-group">
                        <div class="field">
                        <label class="label-login" for="nom">Nom</label>
                            <br>
                            <input class="form-control" type="text" id="nom" name="nom" required>
                            <h4><?php echo form_error('nom'); ?></h4>
                            <label class="label-login" for="prenom">Prénom</label>
                            <br>
                            <input class="form-control" type="text" id="prenom" name="prenom" required>
                            <h4><?php echo form_error('prenom'); ?></h4>
                            <label class="label-login" for="prenom">Pseudo</label>
                            <br>
                            <input class="form-control" type="text" id="pseudo" name="pseudo" required>
                            <h4><?php echo form_error('pseudo'); ?></h4>
                            <br>
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
                            <label class="label-login" for="email">Adresse email</label>
                            <br>
                            <input class="form-control" type="email" id="email" name="email" required>
                            <h4><?php echo form_error('email'); ?></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-between">
                        <div class="col">
                            <input class="btn send-btn" type="submit" name="connexion">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                    <?php echo form_error('formulaire'); ?>
                </div>
            </div>
        </div>
    </div>
</body>