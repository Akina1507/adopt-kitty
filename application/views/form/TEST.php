<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form" id="Upemultistepsform" action="<?= site_url('Famille2/step2'); ?>" method="post">
                <div class="step-header d-flex mb-2 justify-content-center">
                    <span class="steplevel active">Etape 1</span>
                    <span class="steplevel">Etape 2</span>
                    <span class="steplevel">Etape 3</span>
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
                            <h6><?= form_error('type_logement'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                            <select name="exterieur_user" id="exterieur_user">
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <h6><?= form_error('exterieur_user'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
                            <select name="type_exterieur" id="type_exterieur" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="terrasse">Terrasse</option>
                                <option value="jardin">Jardin</option>
                                <option value="balcon" class="balcon-option">Balcon</option>
                                <option value="aucun">Aucun</option>
                            </select>
                            <h6><?= form_error('type_exterieur'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="situation_foyer">Quelle est la situation de votre foyer ?</label>
                            <select name="situation_foyer" id="situation_foyer" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="seul">Seul</option>
                                <option value="couple">En couple</option>
                            </select>
                            <h6><?= form_error('situation_foyer'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                            <input type="number" name="nbr_enfants" id="nbr_enfants">
                            <h6><?= form_error('nbr_enfants'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="age_enfants">Quel âge ont vos enfants ?</label>
                            <input type="number" name="age_enfants" id="age_enfants">
                            <h6><?= form_error('age_enfants'); ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="activite_famille">Avez-vous un emploi ?</label>
                            <select name="activite_famille" id="activite_famille" required>
                                <option value="selectionnez">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <h6><?= form_error('activite_famille'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="temps_activite">Combien de temps l'animal restera-t-il seul ?</label>
                            <input class="form-control" type="number" name="temps_activite" id="temps_activite" required>
                            <h6><?= form_error('temps_activite'); ?></h6>
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="raison_famille">Quelles sont les raisons qui vous poussent à devenir famille d'accueil ?</label>
                            <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                            <h6><?= form_error('raison_famille'); ?></h6>
                        </div>
                        
                    </div>
                </div>
            
   


               
            </div>
        </div>
    </div>
</div>



                
                <div class="step">
                    <h6>Félitation, vous avez bien rempli notre formulaire.
                        <br>A présent vous aller être rediriger vers notre page d'accueil
                    </h6>
                
                </div>
                <div class="btn-row">
                        <a href="<?= site_url('Famille1/step1'); ?>">Étape précédente</a>
                        <button type="submit" class="btn btn-primary">Étape suivante</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/adopt-kitty/assets/js/test.js"></script>