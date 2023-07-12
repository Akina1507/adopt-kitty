<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<!-- ... Formulaire de la première étape ... -->




<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form" id="Upemultistepsform" action="">
                
                <div class="step-header d-flex mb-2">
                    <span class="steplevel">Etape 1</span>
                    <span class="steplevel">Etape 2</span>
                    <span class="steplevel">Etape 3</span>
                    <span class="steplevel">Finii</span>
                </div>
                <div class="step">
                    <div class="mb-3">
                        <label for="nom_user">Nom :</label>
                        <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required value="<?= set_value('nom_user') ?>">
                        <h4><?= form_error('nom_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="prenom_user">Prenom :</label>
                        <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prenom" required value="<?= set_value('prenom_user') ?>">
                        <h4><?= form_error('prenom_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="age_user">Age :</label>
                        <input class="form-control" type="number" name="age_user" id="age_user" placeholder="Votre âge" required value="<?= set_value('age_user') ?>">
                        <h4><?= form_error('age_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="email_user">Email :</label>
                        <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email" required value="<?= set_value('email_user') ?>">
                        <h4><?= form_error('email_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="adresse_user">Adresse :</label>
                        <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required value="<?= set_value('adresse_user') ?>">
                        <h4><?= form_error('adresse_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="ville_user">Ville :</label>
                        <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required value="<?= set_value('ville_user') ?>">
                        <h4><?= form_error('ville_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="codepostal_user">Code postal :</label>
                        <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required value="<?= set_value('codepostal_user') ?>">
                        <h4><?= form_error('codepostal_user'); ?></h4>
                    </div>
                    <div class="mb-3">
                        <label for="tel_user">Téléphone :</label>
                        <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numero de telephone" required value="<?= set_value('tel_user') ?>">
                        <h4><?= form_error('tel_user'); ?></h4>
                    </div>
                </div>

                <div class="step">
                    <div class="mb-3">
                        <label for="type_logement">Quel type de logement avez vous ?</label>
                        <select name="type_logement" id="type_logement" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="maison">Maison</option>
                            <option value="appartement">Appartement</option>
                        </select>
                    <h4><?= form_error('type_logement'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                        <select name="exterieur_user" id="exterieur_user">
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('exterieur_user'); ?></h4>
                    </div>

                    <div class="mb-3">
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

                    <div class="mb-3">
                        <label for="situation_foyer">Qu'elle est la situation de votre foyer ?</label>
                        <select name="situation_foyer" id="situation_foyer" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="seul">Seul</option>
                            <option value="couple">En couple</option>
                        </select>
                    <h4><?= form_error('situation_foyer'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="enfants_foyer">Avez-vous des enfants dans votre foyer ?</label>
                        <select name="enfants_foyer" id="enfants_foyer">
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('enfants_foyer'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                            <input type="number" name="nbr_enfants" id="nbr_enfants">
                    <h4><?= form_error('nbr_enfants'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="age_enfants">Quel âge ont vos enfants ?</label>
                            <input type="number" name="age_enfants" id="nbr_enfants">
                    <h4><?= form_error('age_enfants'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="activite_famille">Avez-vous un emploi ?</label>
                        <select name="activite_famille" id="activite_famille" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('activite_famille'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="temps_activite">Combien de temps l'animal restera t'il seul ? :</label>
                            <input class="form-control" type="number" name="temps_activite" id="temps_activite" required>
                    <h4><?= form_error('temps_activite'); ?></h4>
                    </div>

                    <div class="mb-3">
                        <label for="raison_famille">Qu'elles sont les raisons qui vous pousse à devenir famille d'accueil ?</label>
                            <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                    <h4><?= form_error('raison_famille'); ?></h4>
                    </div>
                </div>



                <div class="step">
                <div class="mb-3">
                        <label for="animaux_famille">Avez vous déjà eu des animaux dans votre foyer ? :</label>
                        <select name="animaux_famille" id="animaux_famille" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('animaux_famille'); ?></h4>
                    </div>

                <div class="mb-3">
                        <label for="animaux_vie">Avez-vous actuellement des animaux dans votre foyer</label>
                        <select name="animaux_vie" id="animaux_vie" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('animaux_vie'); ?></h4>
                    </div>

                <div class="mb-3">
                        <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?</label>
                            <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux" required>
                    <h4><?= form_error('nbr_animaux'); ?></h4>
                    </div>

                <div class="mb-3">
                        <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
                        <select name="age_animaux_vie" id="age_animaux_vie" required>
                            <option value="">Sélectionnez</option>
                            <option value="junior">Junior</option>
                            <option value="adulte">Adulte</option>
                            <option value="senior">Sénior</option>
                        </select>
                    <h4><?php echo form_error('age_animaux_vie'); ?></h4>
                    </div>

                <div class="mb-3">
                            <label for="detail_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
                                <textarea name="detail_animaux_vie" id="detail_animaux_vie" placeholder="races, activités, maladies..." required></textarea>
                    <h4><?php echo form_error('detail_animaux_vie'); ?></h4>
                    </div>

                <div class="mb-3">
                        <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?</label>
                        <select name="disponible_veto" id="disponible_veto" required>
                            <option value="selectionnez">Sélectionnez</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    <h4><?= form_error('disponible_veto'); ?></h4>
                    </div>

                </div>

                <div class="step">
                <div class="mb-3">
                        <p>Success !</p>
                    </div>
                    </div>








                <div class="d-flex btn-row">
                    <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)"
                            type="button">Precedent</button>
                    <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)"
                            type="button">Suivant</button>
                </div>
            </form>
        </div>
    
    </div>
</div>

<?php echo form_close(); ?>
<script src="/adopt-kitty/assets/js/test.js"></script>