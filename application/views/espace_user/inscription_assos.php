<!--------------------------- 
   Inscription utilisateurs + Pop up message succès 
                        --------------------------->
<?php echo form_open() ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 170vh;">
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
                    <?php header('refresh:1;url=' . base_url('Assos/login_assos')); ?>
                <?php } ?>
                <div class="form-group">
                    <div class="field">
                        <label class="label-login" for="nom_assos">Nom de l'association</label>
                        <br>
                        <input class="form-control" type="text" id="nom_assos" name="nom_assos" required>
                        <h6><?php echo form_error('nom_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="adresse_assos">Adresse</label>
                        <br>
                        <input class="form-control" type="text" id="adresse_assos" name="adresse_assos" required>
                        <h6><?php echo form_error('adresse_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="ville_assos">Ville</label>
                        <br>
                        <input class="form-control" type="text" id="ville_assos" name="ville_assos" required>
                        <h6><?php echo form_error('ville_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="codepostal_assos">Code postal</label>
                        <br>
                        <input class="form-control" type="number" id="codepostal_assos" name="codepostal_assos" required>
                        <h6><?php echo form_error('codepostal_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="email_assos">Adresse email</label>
                        <br>
                        <input class="form-control" type="email" id="email_assos" name="email_assos" placeholder="votreadresse@email.com" required>
                        <h6><?php echo form_error('email_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="tel_assos">Numéro de téléphone</label>
                        <br>
                        <input class="form-control" type="number" id="tel_assos" name="tel_assos" placeholder="+33"required>
                        <h6><?php echo form_error('tel_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp_assos">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_assos" name="mdp_assos" required>
                        <h6><?php echo form_error('mdp_assos'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp_confirm_assos">Confirmation de votre mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp_confirm_assos" name="mdp_confirm_assos" required>
                        <h6><?php echo form_error('mdp_confirm_assos'); ?></h6>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <a class="btn btn-outline-dark fw-bold m-1" href="<?= base_url("Users/accueil") ?>">Retour</a>
                        <input class="btn btn-outline-dark fw-bold m-1" type="submit" name="envoyer">
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <?php echo form_error('formulaire'); ?>
            </div>
        </div>
    </div>