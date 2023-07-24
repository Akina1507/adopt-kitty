<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">



<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form" id="Upemultistepsform" action="<?= site_url('Famille1/step1'); ?>" method="post">
                <div class="step-header d-flex mb-2">
                    <span class="steplevel active">Step 1</span>
                    <span class="steplevel">Step 2</span>
                    <span class="steplevel">Step 3</span>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nom_user">Nom :</label>
                            <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom">
                            <?= form_error('nom_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prenom_user">Prénom :</label>
                            <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom">
                            <?= form_error('prenom_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_user">Age :</label>
                            <input class="form-control" type="number" name="age_user" id="age_user" placeholder="Votre âge">
                            <?= form_error('age_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_user">Email :</label>
                            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email">
                            <?= form_error('email_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="adresse_user">Adresse :</label>
                            <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse">
                            <?= form_error('adresse_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ville_user">Ville :</label>
                            <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville">
                            <?= form_error('ville_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="codepostal_user">Code postal :</label>
                            <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal">
                            <?= form_error('codepostal_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel_user">Téléphone :</label>
                            <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numéro de téléphone">
                            <?= form_error('tel_user'); ?>
                        </div>
                        <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                        </div>
                    </div>
                </div>


                        <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="type_logement">Quel type de logement avez-vous ?</label>
                            <select name="type_logement" id="type_logement">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="maison">Maison</option>
                                <option value="appartement">Appartement</option>
                            </select>
                            <?= form_error('type_logement'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                            <select name="exterieur_user" id="exterieur_user">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('exterieur_user'); ?>
                        </div>
                         <div class="col-md-6 mb-3">
                            <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
                            <select name="type_exterieur" id="type_exterieur">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="terrasse">Terrasse</option>
                                <option value="jardin">Jardin</option>
                                <option value="balcon" class="balcon-option">Balcon</option>
                                <option value="aucun">Aucun</option>
                            </select>
                            <?= form_error('type_exterieur'); ?>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="situation_foyer">Quelle est la situation de votre foyer ?</label>
                            <select name="situation_foyer" id="situation_foyer">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="seul">Seul</option>
                                <option value="couple">En couple</option>
                            </select>
                            <?= form_error('situation_foyer'); ?>
                        </div>
                       
                        <div class="col-md-6 mb-3">
                            <label for="enfants_foyer">Avez vous des enfants dans votre foyer ?</label>
                            <select name="enfants_foyer" id="enfants_foyer">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('enfants_foyer'); ?>
                        </div>
                         
                        <div class="col-md-6 mb-3">
                            <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                            <input type="number" name="nbr_enfants" id="nbr_enfants">
                            <?= form_error('nbr_enfants'); ?>
                        </div>
                       
                        <div class="col-md-6 mb-3">
                            <label for="age_enfants">Quel âge ont vos enfants ?</label>
                            <input type="number" name="age_enfants" id="age_enfants">
                            <?= form_error('age_enfants'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="raison_famille">Quelles sont les raisons qui vous poussent à devenir famille d'accueil ?</label>
                            <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..."></textarea>
                            <?= form_error('raison_famille'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="activite_famille">Avez-vous un emploi ?</label>
                            <select name="activite_famille" id="activite_famille">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('activite_famille'); ?>
                        </div>
                       
                        <div class="col-md-6 mb-3">
                            <label for="temps_activite">Combien de temps l'animal restera-t-il seul ?</label>
                            <input class="form-control" type="number" name="temps_activite" id="temps_activite">
                            <?= form_error('temps_activite'); ?>
                        </div>
                        <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                    </div>
                    </div>
                </div>


                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="animaux_famille">Avez-vous déjà eu des animaux dans votre foyer ? :</label>
                            <select name="animaux_famille" id="animaux_famille">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('animaux_famille'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="animaux_vie">Vos animaux sont-ils toujours en vie ?</label>
                            <select name="animaux_vie" id="animaux_vie">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?</label>
                            <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux">
                            <?= form_error('nbr_animaux'); ?>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
                            <select name="age_animaux_vie" id="age_animaux_vie">
                                <option value="">Sélectionnez</option>
                                <option value="junior">Junior</option>
                                <option value="adulte">Adulte</option>
                                <option value="senior">Sénior</option>
                            </select>
                            <?= form_error('age_animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="details_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
                            <textarea name="details_animaux_vie" id="details_animaux_vie" placeholder="races, activités, maladies..."></textarea>
                            <?= form_error('details_animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?</label>
                            <select name="disponible_veto" id="disponible_veto">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('disponible_veto'); ?>
                        </div>
                    </div> 
                    <div class="d-flex btn-row"> 
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/adopt-kitty/assets/js/test.js"></script>