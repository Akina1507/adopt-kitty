<!--------------------------- 
         Vue Connexion 
    --------------------------->
<?php echo form_open('Users/login') ?>
<div class=" fond d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 container-login bg-white bordered">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-bs-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Connexion</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Inscription</a>
    </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form>
            <!-- Email input -->
            <div class="field">
                        <label class="label-login" for="email">Email</label>
                        <br>
                        <input class="form-control" type="text" id="email" name="email" placeholder="votreadresse@email.com" required>
                        <h6><?php echo form_error('email'); ?></h6>
                        <br>
                        <label class="label-login" for="mdp">Mot de passe</label>
                        <br>
                        <input class="form-control" type="password" id="mdp" name="mdp" required>
                        <h6><?php echo form_error('mdp'); ?></h6>
                    </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                        <label class="form-check-label" for="loginCheck">Se souvenir de moi</label>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <a href="<?= base_url("Users/mail") ?>">Mot de passe oublié ?</a>
                </div>
                <?php echo form_close(); ?>
                <?= form_error('formulaire'); ?>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>
        </form>
    </div>
    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form>
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

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                    Accepter les conditions générales
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">S'inscrire</button>
        </form>
    </div>
</div>
<!-- Pills content -->
