<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<?php echo form_open('Famille/step3'); ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pb-2 bg-white bordered">
                <h2>Étape 2</h2>
                <div class="inputBox">
                    <label for="type_logement">Quel type de logement avez vous ?</label>
                    <select name="type_logement" id="type_logement" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="maison">Maison</option>
                        <option value="appartement">Appartement</option>
                    </select>
                    <h4><?= form_error('type_logement'); ?></h4>
                </div>
                <br>
                <div class="inputBox" id="exterieur_user_input">
                    <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                    <select name="exterieur_user" id="exterieur_user">
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('exterieur_user'); ?></h4>
                </div>

                <div class="inputBox" id="type_exterieur_div" style="display: none;">
                    <label for="type_exterieur">Selectionnez le type d'extérieur de votre habitation :</label>
                    <select name="type_exterieur" id="type_exterieur" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="terrasse">Terrasse</option>
                        <option value="jardin">Jardin</option>
                        <option value="balcon" class="balcon-option">Balcon</option>
                        <option value="aucun">Aucun</option>
                    </select>
                    <h4><?= form_error('type_exterieur'); ?></h4>
                </div>
                <br>
                <!-- Condition d'affichage pour type/info logement -->
                <div class="inputBox" id="situation_foyer_input">
                    <label for="situation_foyer">Qu'elle est la situation de votre foyer ?</label>
                    <select name="situation_foyer" id="situation_foyer" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="seul">Seul</option>
                        <option value="couple">En couple</option>
                    </select>
                    <h4><?= form_error('situation_foyer'); ?></h4>
                </div>

                <div id="enfants_foyer_input" style="display: none;">
                    <label for="enfants_foyer">Avez-vous des enfants dans votre foyer ?</label>
                    <select name="enfants_foyer" id="enfants_foyer">
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('enfants_foyer'); ?></h4>
                </div>
                <br>
                <div id="nbr_enfants_input" style="display: none;">
                    <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                    <input type="number" name="nbr_enfants" id="nbr_enfants">
                    <h4><?= form_error('nbr_enfants'); ?></h4>
                </div>
                <br>
                <div id="age_enfants_input" style="display: none;">
                    <label for="age_enfants">Quel âge ont vos enfants ?</label>
                    <input type="number" name="age_enfants" id="nbr_enfants">
                    <h4><?= form_error('age_enfants'); ?></h4>
                </div>

                <div class="inputBox">
                    <label for="activite_famille">Avez-vous un emploi ?</label>
                    <select name="activite_famille" id="activite_famille" required>
                        <option value="selectionnez">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <h4><?= form_error('activite_famille'); ?></h4>
                </div>
                <br>
                <div class="inputBox">
                    <label for="temps_activite">Combien de temps l'animal restera t'il seul ? :</label>
                    <input class="form-control" type="number" name="temps_activite" id="temps_activite" required>
                    <h4><?= form_error('temps_activite'); ?></h4>
                </div>
                <div>
                    <label for="raison_famille">Qu'elles sont les raisons qui vous pousse à devenir famille d'accueil ?</label>
                    <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                    <h4><?= form_error('raison_famille'); ?></h4>
                </div>
                <a href="<?= site_url('form/step1'); ?>">Étape précédente</a>
                <button type="submit" class="btn btn-primary">Étape suivante</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<script src="/projet-codeigniter/assets/js/script.js"></script>