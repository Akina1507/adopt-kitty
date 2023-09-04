<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/adopt-kitty/assets/css/style.css">

<style>
    .invalid-feedback {
        color: red;
    }

</style>


<!--------------------------- 
     Mise en page + étape 1 
    --------------------------->
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
                            <label for="race_animal">Races/Apparence</label>
                            <select class="form-select" name="race_animal" id="race_animal" required>
                                <option value="">Sélectionnez</option>
                                <option value="croise-autre">Croisé/Autre</option>
                                <option value="europeen">Europeen</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('race_animal'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="naissance_animal">Date de naissance de l'animal (approximative) :</label>
                            <input class="form-control" type="date" name="naissance_animal" id="naissance_animal" placeholder="Votre numéro de téléphone" required>
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
                            <label for="compatible_animal">L'animal n'est pas compatible avec les animaux ou les jeunes enfants? :</label>
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
                    


                    <div class="col-md-6 mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">Accepter les conditions générales</label>
                    </div>
                    <div class="d-flex btn-row">
                            <button class="btn btn-outline-dark fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Précédent</button>
                            <button class="btn btn-outline-dark fw-bold m-1" id="submitButton" onclick="validateAndSubmit()" type="button">Envoyer</button>
                        </div>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>




<script src="/adopt-kitty/assets/js/test.js"></script>

<!--------------------------- 
     Erreur icones bootstrap des champs 
            --------------------------->
<script>
    // Validation et envoi du formulaire
    function validateAndSubmit() {
        const invalidCheck = document.getElementById('invalidCheck');
        const requiredInputs = document.querySelectorAll('.needs-validation :required:not(.form-check-input)');

        let allFieldsFilled = true;

        // Vérifier si tous les champs obligatoires sont remplis
        requiredInputs.forEach(input => {
            if (input.value.trim() === '') {
                allFieldsFilled = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!allFieldsFilled) {
            // Afficher la pop-up si des champs obligatoires ne sont pas remplis
            alert("Veuillez remplir tous les champs obligatoires.");
        } else if (!invalidCheck.checked) {
            // Afficher la pop-up si les conditions générales ne sont pas cochées
            alert("Veuillez accepter les conditions générales.");
        } else {
            // Envoyer le formulaire à la base de données si tout est valide
            document.getElementById('Upemultistepsform').submit();
        }
    }

    // Afficher la pop-up si les conditions générales ne sont pas cochées
    function showPopup() {
        const invalidCheck = document.getElementById('invalidCheck');

        if (!invalidCheck.checked) {
            alert("Veuillez accepter les conditions générales.");
        }
    }
    // Validation Bootstrap personnalisée
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')
        const btn = document.getElementById('nextBtn')

        Array.from(forms).forEach(form => {
            btn.addEventListener('click', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })();






    function myForm() {

        var d = document.getElementById("form");
        var sent = document.getElementById("sent");

        d.classList.add('display-none');


        sent.classList.remove('display-none');
    }
</script>



