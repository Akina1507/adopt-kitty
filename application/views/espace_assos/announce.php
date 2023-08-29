<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<style>
    .invalid-feedback {
        color: red;
}
</style>


<!--------------------------- 
     Mise en page + étape 1 
    --------------------------->
    <?php echo form_open('Annonce/announce'); ?>

<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form needs-validation" novalidate id="Upemultistepsform" action="<?= site_url('Famille1/step1'); ?>" method="post">
                <div class="step-header d-flex mb-2">
                    <span class="steplevel active d-flex justify-content-center">Etape 1</span>
                    <span class="steplevel d-flex justify-content-center">Etape 2</span>
                    <span class="steplevel d-flex justify-content-center">Etape 3</span>
                </div>
                <div class="step">
                    <div class="row">
                        <h3>Poster votre annonce</h3>
                        <div class="col-md-6 mb-3">
                            <label for="nom_animal">Nom de l'animal :</label>
                            <input class="form-control" type="text" name="nom_animal" id="nom_animal" placeholder="Nom de l'animal" required>
                            <h6 class="invalid-feedback"><?= form_error('nom_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="puce_animal">Numéro d'identification :</label>
                            <input class="form-control" type="number" name="puce_animal" id="puce_animal" placeholder="Votre numéro de téléphone" required>
                            <h6 class="invalid-feedback"><?= form_error('puce_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="img_animal">Image de l'animal :</label>
					        <input type="file" name="img_animal" id="img_animal" required>
                            <h6 class="invalid-feedback"><?= form_error('img_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="espece_animal">Espèce</label>
                            <select class="form-select" name="espece_animal" id="espece_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="chat">Chat</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('espece_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="race_animal">Races/Types</label>
                            <select class="form-select" name="race_animal" id="race_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="espece1">Espece 1</option>
                                <option value="espece2">Espece 2</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('race_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="naissance_animal">Date de naissance de l'animal (approximative) :</label>
                            <select class="form-select" name="naissance_animal" id="naissance_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="calendrier">Calendrier a mettre</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('naissance_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sexe_animal">Sexe de l'animal</label>
                            <select class="form-select" name="sexe_animal" id="sexe_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="male">Mâle</option>
                                <option value="femelle">Femelle</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('sexe_animal'); ?></h6>
                        </div>
                        
                        
                        <div class="col-md-6 mb-3">
                            <label for="lieu_animal">Association ou il réside actuellement :</label>
                            <input class="form-control" type="text" name="lieu_animal" id="lieu_animal" placeholder="Votre ville" required>
                            <h6 class="invalid-feedback"><?= form_error('lieu_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="compatible_animal">L'animal n'est pas compatible avec les animaux ? :</label>
                            <select class="form-select" name="compatible_animal" id="compatible_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="chiens">Chiens</option>
                                <option value="chats">Chats</option>
                                <option value="enfants">Enfants</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('compatible_animal'); ?></h6>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description_animal">Descritif de l'animal :</label>
                            <textarea class="form-control" name="description_animal" id="description_animal" placeholder="Comportement, maladie, compatibilité" required></textarea>
                            <h6 class="invalid-feedback"><?= form_error('description_animal'); ?></h6>
                        </div>
                        
                        
                        <div class="d-flex btn-row">
                            <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Suivant</button>
                        </div>
                    </div>
                </div>
<!--------------------------- 
     Etape 2 du formulaire 
    --------------------------->
                <div class="step">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="raison_famille">Pourquoi souhaitez-vous devenir famille d'accueil ?</label>
                            <textarea class="form-control" name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                            <h6 class="invalid-feedback"><?= form_error('raison_famille'); ?></h6>
                        </div>
                        <div class="d-flex btn-row">
                            <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Précédent</button>
                            <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Suivant</button>
                        </div>
                    </div>
                </div>
<!--------------------------- 
     Etape 3 du formulaire 
    --------------------------->
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    <label class="form-check-label" for="invalidCheck">Accepter les conditions générales</label>
</div>
                    
                    
<div class="d-flex btn-row">
    <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Précédent</button>
    <button class="btn btn-primary fw-bold m-1" id="submitButton" onclick="validateAndSubmit()" type="button">Envoyer</button>
</div>
                </div>
            </form>
        </div>
    </div>
</div>





