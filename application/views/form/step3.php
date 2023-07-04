<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php echo form_open(); ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pb-2 bg-white bordered">
                <h2>Étape 3</h2>

                <div class="inputBox" id="animaux_famille_input">
                    <label for="animaux_famille">Avez vous déjà eu des animaux dans votre foyer ? :</label>
                    <select name="animaux_famille" id="animaux_famille" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('animaux_famille'); ?></h4>
                </div>
                <div class="inputBox" id="animaux_vie_input">
                    <label for="animaux_vie">Avez-vous actuellement des animaux dans votre foyer</label>
                    <select name="animaux_vie" id="animaux_vie" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('animaux_vie'); ?></h4>
                </div>
                <div class="inputBox" id="nbr_animaux_input" style="display: none;">
                    <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?</label>
                    <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux" required>
                    <h4><?= form_error('nbr_animaux'); ?></h4>
                </div>
                <br>
                <div class="inputBox" id="age_animaux_vie_input" style="display: none;">
                    <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
                    <select name="age_animaux_vie" id="age_animaux_vie" required>
                        <option value="">Sélectionnez</option>
                        <option value="junior">Junior</option>
                        <option value="adulte">Adulte</option>
                        <option value="senior">Sénior</option>
                    </select>
                    <h4><?php echo form_error('age_animaux_vie'); ?></h4>
                </div>
                <br>
                <div class="inputBox">
                    <label for="detail_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
                    <textarea name="detail_animaux_vie" id="detail_animaux_vie" placeholder="races, activités, maladies..." required></textarea>
                    <h4><?php echo form_error('detail_animaux_vie'); ?></h4>
                </div>
                <br>
                <div class="inputBox">
                    <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?</label>
                    <select name="disponible_veto" id="disponible_veto" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('disponible_veto'); ?></h4>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>

                <a href="<?= site_url('form/step2'); ?>">Étape précédente</a>
            </div>
        </div>
    </div>
</div>
<script src="/projet-codeigniter/assets/js/script.js"></script>
<?php echo form_close(); ?>