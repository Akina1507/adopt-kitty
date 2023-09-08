<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/adopt-kitty/assets/css/style.css">

<style>
    .invalid-from-error {
        color: red;
    }
</style>
<!--------------------------- 
     Mise en page + étape 1 
    --------------------------->
<div class="container form-container">
    <?= form_open_multipart('Annonce/annonce') ?>
    <div class="row">
        <h3>Poster votre annonce</h3>
        <div class="col-md-6 mb-3">
            <label for="nom_animal">Nom de l'animal :</label>
            <input class="form-control" type="text" name="nom_animal" id="nom_animal" placeholder="Nom de l'animal" required>
            <h6 class="invalid-from-error"><?= form_error('nom_animal'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="puce_animal">Numéro d'identification :</label>
            <input class="form-control" type="number" name="puce_animal" id="puce_animal" placeholder="Numéro d'identification">
            <h6 class="error"><?= form_error('puce_animal'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="image_chat">Image du chat</label>
            <input class="form-control" type="file" name="image_chat" id="image_chat" required>
            <h6 class="invalid-from-error"><?= form_error('image_chat'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="espece_animal">Espèce</label>
            <select class="form-select" name="espece_animal" id="espece_animal" required>
                <option value="">Sélectionnez</option>
                <option value="chat">Chat</option>
            </select>
            <h6 class="invalid-from-error"><?= form_error('espece_animal'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="race_animal">Races/Apparence</label>
            <select class="form-select" name="race_animal" id="race_animal" required>
                <option value="">Sélectionnez</option>
                <?php
                foreach ($races as $race) {
                    echo '<option value="' . $race['value'] . '">' . $race['races'] . '</option>';
                }
                ?>
            </select>
            <h6 class="invalid-from-error"><?= form_error('race_animal'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="naissance_animal">Date de naissance de l'animal (approximative) :</label>
            <input class="form-control" type="date" name="naissance_animal" id="naissance_animal" placeholder="date de naissance de l'animal" required>
            <h6 class="invalid-from-error"><?= form_error('naissance_animal'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="sexe_animal">Sexe de l'animal</label>
            <select class="form-select" name="sexe_animal" id="sexe_animal" required>
                <option value="">Sélectionnez</option>
                <option value="male">Mâle</option>
                <option value="femelle">Femelle</option>
            </select>
            <h6 class="invalid-from-error"><?= form_error('sexe_animal'); ?></h6>
        </div>


        <div class="col-md-6 mb-3">
            <label for="lieu_animal">Association ou il réside actuellement :</label>
            <input class="form-control" type="text" name="lieu_animal" id="lieu_animal" placeholder="Nom de l'association" required>
            <h6 class="invalid-from-error"><?= form_error('lieu_animal'); ?></h6>
        </div>

        <!-- Boutons radio -->

        <div class="col-md-6 mb-3">
            <label for="animaux_radio">L'animal a t'il des incompatibilités avec les animaux ou les jeunes enfants ?</label>

            <div class="col-md-6 mb-3 d-flex justify-content-around mx-5 p-3" id="animaux_radio_div">

                <div class="animaux_radio">
                    <label for="chiens_radio">Chiens</label>
                    <div class="col-mb-12">
                        <input class="form-check-input required-radio" type="radio" name="chiens_radio" id="chiens_radio" value="chiens">
                        <label class="form-check-label" for="chiens_radio"></label>
                    </div>
                    <h6 class="invalid-from-error"><?= form_error('chiens_radio'); ?></h6>
                </div>


                <div>
                    <label for="chats_radio">Chats</label>
                    <div class="col-mb-12">
                        <input class="form-check-input" type="radio" name="chats_radio" id="chats_radio" value="chats">
                        <label class="form-check-label" for="chats_radio"></label>
                    </div>

                    <h6 class="invalid-from-error"><?= form_error('chats_radio'); ?></h6>
                </div>

                <div>
                    <label for="enfants_radio">Enfants</label>
                    <div class="col-mb-12">
                        <input class="form-check-input" type="radio" name="enfants_radio" id="enfants_radio" value="enfants">
                        <label class="form-check-label" for="enfants_radio"></label>
                    </div>
                </div>
                <h6 class="invalid-from-error"><?= form_error('enfants_radio'); ?></h6>


                <div>
                    <label for="non_radio">Non</label>
                    <div class="col-mb-12">
                        <input class="form-check-input" type="radio" name="non_radio" id="non_radio" value="oui">
                        <label class="form-check-label" for="non_radio"></label>
                    </div>
                    <h6 class="invalid-from-error"><?= form_error('non_radio'); ?></h6>
                </div>
            </div>
        </div>


        <div class="col-md-12 mb-3">
            <label for="description_animal">Description de l'animal :</label>
            <textarea class="form-control" name="description_animal" id="description_animal" placeholder="Comportement, maladie, compatibilité..." required></textarea>
            <h6 class="invalid-from-error"><?= form_error('description_animal'); ?></h6>
        </div>

        <div class="col-md-6 mb-3">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Accepter les conditions générales</label>
        </div>

        <div class="d-flex btn-row">
            <button class="btn btn-outline-dark fw-bold m-1" id="submitButton" onclick="validateAndSubmit()" type="submit">Envoyer</button>
        </div>
    </div>
    <?= form_close(); ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/adopt-kitty/assets/js/test.js"></script>