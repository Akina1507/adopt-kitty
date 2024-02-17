<!--------------------------- 
   Inscription utilisateurs + Pop up message succès 
                        --------------------------->

<?php echo form_open() ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 120vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
                <h4 class="text-center">Inscription</h4>
                <h6 class="text-center">Utilisateurs</h6>
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
                        <h6><?php echo form_error('nom'); ?></h6>
                        <br>
                        <label class="label-login" for="prenom">Prénom</label>
                        <br>
                        <input class="form-control" type="text" id="prenom" name="prenom" required>
                        <h6><?php echo form_error('prenom'); ?></h6>
                        <br>
                        <label class="label-login" for="pseudo">Nom d'utilisateur</label>
                        <br>
                        <input class="form-control" type="text" id="pseudo" name="pseudo" required>
                        <h6><?php echo form_error('pseudo'); ?></h6>
                        <br>
                        <label class="label-login" for="email">Adresse email</label>
                        <br>
                        <input class="form-control" type="email" id="email" name="email" placeholder="votreadresse@email.com" required>
                        <h6><?php echo form_error('email'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp" name="mdp" required>
                        <h6><?php echo form_error('mdp'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp_confirm">Confirmation de votre mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_confirm" name="mdp_confirm" required>
                        <h6><?php echo form_error('mdp_confirm'); ?></h6>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/accueil") ?>">Retour</a>
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
                    </div>
                    <?php echo form_close(); ?>
                    <?php echo form_error('formulaire'); ?>
                </div>
            </div>
        </div>
    </div>