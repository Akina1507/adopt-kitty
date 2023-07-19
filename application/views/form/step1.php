<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form" id="Upemultistepsform" action="">
                <div class="step-header d-flex mb-2">
                    <span class="steplevel active">Step 1</span>
                    <span class="steplevel">Step 2</span>
                    <span class="steplevel">Step 3</span>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nom_user">Nom :</label>
                            <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required value="<?= set_value('nom_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prenom_user">Prénom :</label>
                            <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom" required value="<?= set_value('prenom_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_user">Age :</label>
                            <input class="form-control" type="number" name="age_user" id="age_user" placeholder="Votre âge" required value="<?= set_value('age_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_user">Email :</label>
                            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email" required value="<?= set_value('email_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="adresse_user">Adresse :</label>
                            <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required value="<?= set_value('adresse_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ville_user">Ville :</label>
                            <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required value="<?= set_value('ville_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="codepostal_user">Code postal :</label>
                            <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required value="<?= set_value('codepostal_user') ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel_user">Téléphone :</label>
                            <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numéro de téléphone" required value="<?= set_value('tel_user') ?>">
                        </div>
                    </div>
                    <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                    </div>
                </div>

                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type_logement">Quel type de logement avez-vous ?</label>
                            <select name="type_logement" id="type_logement" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="maison">Maison</option>
                                <option value="appartement">Appartement</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                            <select name="exterieur_user" id="exterieur_user">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
                            <select name="type_exterieur" id="type_exterieur" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="terrasse">Terrasse</option>
                                <option value="jardin">Jardin</option>
                                <option value="balcon" class="balcon-option">Balcon</option>
                                <option value="aucun">Aucun</option>
                            </select>
                            <span class="error-message">Veuillez sélectionner un type d'extérieur.</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="situation_foyer">Quelle est la situation de votre foyer ?</label>
                            <select name="situation_foyer" id="situation_foyer" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="seul">Seul</option>
                                <option value="couple">En couple</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                            <input type="number" name="nbr_enfants" id="nbr_enfants">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_enfants">Quel âge ont vos enfants ?</label>
                            <input type="number" name="age_enfants" id="age_enfants">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="activite_famille">Avez-vous un emploi ?</label>
                            <select name="activite_famille" id="activite_famille" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="temps_activite">Combien de temps l'animal restera-t-il seul ?</label>
                            <input class="form-control" type="number" name="temps_activite" id="temps_activite" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="raison_famille">Quelles sont les raisons qui vous poussent à devenir famille d'accueil ?</label>
                            <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                        </div>
                    </div>
                    <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                    </div>
                </div>

                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="animaux_famille">Avez-vous déjà eu des animaux dans votre foyer ? :</label>
                            <select name="animaux_famille" id="animaux_famille" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?</label>
                            <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
                            <select name="age_animaux_vie" id="age_animaux_vie" required>
                                <option value="">Sélectionnez</option>
                                <option value="junior">Junior</option>
                                <option value="adulte">Adulte</option>
                                <option value="senior">Sénior</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="detail_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
                            <textarea name="detail_animaux_vie" id="detail_animaux_vie" placeholder="races, activités, maladies..." required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?</label>
                            <select name="disponible_veto" id="disponible_veto" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                    </div>
                </div>
                <div class="step">
                    <h3>Terminé</h3>
                    <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/adopt-kitty/assets/js/test.js"></script>
