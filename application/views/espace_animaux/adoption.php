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
                        <h3>Procédure d'adoption</h3>
                        <div class="col-md-6 mb-3">
                            <label for="civile_user">Civilité :</label>
                            <select class="form-select" name="civile_user" id="civile_user" required>
                                <option value="">Sélectionnez</option>
                                <option value="monsieur">Monsieur</option>
                                <option value="madame">Madame</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('civile_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nom_user">Nom :</label>
                            <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required>
                            <h6 class="invalid-feedback"><?= form_error('nom_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prenom_user">Prénom :</label>
                            <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom" required>
                            <h6 class="invalid-feedback"><?= form_error('prenom_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_user">Age :</label>

                            <select class="form-select" name="age_user" id="age_user" required>
                                <option value="">Sélectionnez</option>
                                <option value="18-25ans">18 - 25 ans</option>
                                <option value="25-35ans">25 - 35 ans</option>
                                <option value="35-50ans">35 - 50 ans</option>
                                <option value="50-75ans">50 - 75 ans</option>
                                <option value="75-99ans">75 - 99 ans</option>
                                <option value="99-ou-plus">99 ans ou plus</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('age_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_user">Email :</label>
                            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="votreadresse@email.com" required>
                            <h6 class="invalid-feedback"><?= form_error('email_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="adresse_user">Adresse :</label>
                            <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required>
                            <h6 class="invalid-feedback"><?= form_error('adresse_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ville_user">Commune :</label>
                            <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required>
                            <h6 class="invalid-feedback"><?= form_error('ville_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="codepostal_user">Code postal :</label>
                            <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required>
                            <h6 class="invalid-feedback"><?= form_error('codepostal_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel_user">Téléphone :</label>
                            <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="+33" required>
                            <h6 class="invalid-feedback"><?= form_error('tel_user'); ?></h6>
                        </div>
                        
                        <div class="d-flex btn-row">
                            <button class="btn btn-outline-dark fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Suivant</button>
                        </div>
                    </div>
                </div>
                
                <!--------------------------- 
     Etape 2 du formulaire 
    --------------------------->
        <div class="step">
            <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="raison_adopt">Pourquoi souhaitez-vous adopter un animal ?</label>
                            <textarea class="form-control" name="raison_adopt" id="raison_adopt" placeholder="Votre message..." required></textarea>
                            <h6 class="invalid-feedback"><?= form_error('raison_adopt'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="accueil_animaux">Quel type d'animal souhaitez-vous accueillir ?</label>
                            <select class="form-select" name="accueil_animaux" id="accueil_animaux" required>
                                <option value="">Sélectionnez</option>
                                <option value="chat">Chat</option>
                            </select>
                             <h6 class="invalid-feedback"><?= form_error('raison_famille'); ?></h6>
                        </div>
                            <div class="col-md-6 mb-3 d-none" id="age_animaux_div">
                            <label for="age_animaux">Quel age de preférence souhaitez vous ?</label>
                            <select class="form-select" name="age_animaux" id="age_animaux">
                                <option value="">Sélectionnez</option>
                                <option value="junior">Junior</option>
                                <option value="adulte">Adulte</option>
                                <option value="senior">Sénior</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('age_animaux'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3" id="animaux_foyer_div">
                            <label for="animaux_foyer">Avez-vous des animaux en ce moment dans votre foyer ?</label>
                            <select class="form-select" name="animaux_foyer" id="animaux_foyer" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('animaux_foyer'); ?></h6>
                        </div>
                        <!--------------------------- Boutons radio
                                                      --------------------------->
                    <div class="col-md-6 mb-3 d-flex" id="animaux_radio_div">
                            <div class="animaux_radio">
                                <label for="chiens_radio">Chiens</label>
                                <div class="col-mb-12">
                                    <input class="form-check-input required-radio" type="radio" name="chiens_radio" id="chiens_radio_0" value="0" required>
                                    <label class="form-check-label" for="chiens_radio_0">0</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input required-radio" type="radio" name="chiens_radio" id="chiens_radio_1" value="1">
                                    <label class="form-check-label" for="chiens_radio_1">1</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input required-radio" type="radio" name="chiens_radio" id="chiens_radio_2" value="2">
                                    <label class="form-check-label" for="chiens_radio_2">2</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input required-radio" type="radio" name="chiens_radio" id="chiens_radio_3" value="3">
                                    <label class="form-check-label" for="chiens_radio_3">3</label>
                                </div>
                                <h6 class="invalid-feedback"><?= form_error('chiens_radio'); ?></h6>
                            </div>

                            <div>
                                <label for="chats_radio">Chats</label>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="chats_radio" id="chats_radio_0" value="0" required>
                                    <label class="form-check-label" for="chats_radio_0">0</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="chats_radio" id="chats_radio_1" value="1">
                                    <label class="form-check-label" for="chats_radio_1">1</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="chats_radio" id="chats_radio_2" value="2">
                                    <label class="form-check-label" for="chats_radio_2">2</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="chats_radio" id="chats_radio_3" value="3">
                                    <label class="form-check-label" for="chats_radio_3">3</label>
                                </div>
                                <h6 class="invalid-feedback"><?= form_error('chats_radio'); ?></h6>
                            </div>

                            <div>
                                <label for="oiseaux_radio">Oiseaux</label>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="oiseaux_radio" id="oiseaux_radio_0" value="0" required>
                                    <label class="form-check-label" for="oiseaux_radio_0">0</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="oiseaux_radio" id="oiseaux_radio_1" value="1">
                                    <label class="form-check-label" for="oiseaux_radio_1">1</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="oiseaux_radio" id="oiseaux_radio_2" value="2">
                                    <label class="form-check-label" for="oiseaux_radio_2">2</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="oiseaux_radio" id="oiseaux_radio_3" value="3">
                                    <label class="form-check-label" for="oiseaux_radio_3">3</label>
                                </div>
                            </div>
                            <h6 class="invalid-feedback"><?= form_error('oiseaux_radio'); ?></h6>


                            <div>
                                <label for="autres_radio">Autres</label>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="autres_radio" id="autres_radio_0" value="0" required>
                                    <label class="form-check-label" for="autres_radio_0">0</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="autres_radio" id="autres_radio_1" value="1">
                                    <label class="form-check-label" for="autres_radio_1">1</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="autres_radio" id="autres_radio_2" value="2">
                                    <label class="form-check-label" for="autres_radio_2">2</label>
                                </div>
                                <div class="col-mb-12">
                                    <input class="form-check-input" type="radio" name="autres_radio" id="autres_radio_3" value="3">
                                    <label class="form-check-label" for="autres_radio_3">3</label>
                                </div>
                                <h6 class="invalid-feedback"><?= form_error('autres_radio'); ?></h6>
                            </div>
                            </div>
                            
                            <div class="col-md-6 mb-3" id="others_animaux_div">
                            <label for="others_animaux">Vos autres animaux :</label>
                            <input class="form-control" name="others_animaux" id="others_animaux" placeholder="rongueurs, reptiles, poissons...">
                            <h6 class="invalid-feedback"><?= form_error('others_animaux'); ?></h6>
                        </div>
                            <div class="col-md-6 mb-3">
                            <label for="animaux_domestiques">Avez-vous déjà eu des animaux domestiques ?</label>
                            <select class="form-select" name="animaux_domestiques" id="animaux_domestiques" required>
                                <option value="">Sélectionnez</option>
                                <option value="chiens">Chiens</option>
                                <option value="chats">Chats</option>
                                <option value="oiseaux">Oiseaux</option>
                                <option value="autres">Autres</option>
                                <option value="non">Non</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('animaux_domestiques'); ?></h6>
                        </div>
                        
                        <div class="col-md-12 d-none" id="exp_animaux_div">
                            <label for="exp_animaux">Pourriez-vous nous dire vos expériences avec les animaux domestiques (caractéristiques, comportement, maladies...)</label>
                            <textarea class="form-control" name="exp_animaux" id="details_animaux_vie" placeholder="Votre message..."></textarea>
                            <h6 class="invalid-feedback"><?= form_error('exp_animaux'); ?></h6>
                        </div>
                        <br>
                    <div class="d-flex btn-row">
                            <button class="btn btn-outline-dark fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Précédent</button>
                            <button class="btn btn-outline-dark fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Suivant</button>
                        </div>
                </div>
            </div>
        



<!--------------------------- 
     Etape 3 du formulaire 
    --------------------------->

            <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type_logement">Quel type de logement avez-vous ?</label>
                            <select class="form-select" name="type_logement" id="type_logement" required>
                                <option value="">Sélectionnez</option>
                                <option value="maison">Maison</option>
                                <option value="appartement">Appartement</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('type_logement'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
                            <select class="form-select" name="exterieur_user" id="exterieur_user" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('exterieur_user'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="type_exterieur_div">
                            <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
                            <select class="form-select" name="type_exterieur" id="type_exterieur">
                                <option value="">Sélectionnez</option>
                                <option value="terrasse">Terrasse</option>
                                <option value="jardin">Jardin</option>
                                <option value="balcon" class="balcon-option">Balcon</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('type_exterieur'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="situation_foyer">Quelle est la composition de votre foyer ?</label>
                            <select class="form-select" name="situation_foyer" id="situation_foyer" required>
                                <option value="">Sélectionnez</option>
                                <option value="seul">Seul</option>
                                <option value="couple">En couple</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('situation_foyer'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="activite_famille_div">
                            <label for="activite_famille">Quelle est votre situation actuelle ?</label>
                            <select class="form-select" name="activite_famille" id="activite_famille">
                                <option value="">Sélectionnez</option>
                                <option value="sans-emploi">Sans Emploi</option>
                                <option value="salarie">Salarié(e)</option>
                                <option value="etudiant">Étudiant</option>
                                <option value="handicape">Handicapé</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('activite_famille'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="activite_conjoint_div">
                            <label for="activite_conjoint">Quelle est la situation actuelle de votre conjoint(e) ?</label>
                            <select class="form-select" name="activite_conjoint" id="activite_conjoint">
                                <option value="">Sélectionnez</option>
                                <option value="sans-emploi">Sans Emploi</option>
                                <option value="salarie">Salarié(e)</option>
                                <option value="etudiant">Étudiant</option>
                                <option value="handicape">Handicapé</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('activite_conjoint'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="enfants_foyer_div">
                            <label for="enfants_foyer">Avez vous des enfants dans votre foyer ?</label>
                            <select class="form-select" name="enfants_foyer" id="enfants_foyer">
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('enfants_foyer'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="nbr_enfants_div">
                            <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
                            <select class="form-select" name="nbr_enfants" id="nbr_enfants">
                                <option value="">Sélectionnez</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('nbr_enfants'); ?></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="temps_activite">Quelle est la durée maximale où votre animal serait seul à votre domicile ?</label>
                            <select class="form-select" name="temps_activite" id="temps_activite" required>
                                <option value="">Sélectionnez</option>
                                <option value="1h-3h">1 à 3 heures</option>
                                <option value="3h-5h">3 à 5 heures</option>
                                <option value="5h-7h">5 à 7 heures</option>
                                <option value="7h-ou-plus">7 heures ou plus</option>
                            </select>
                            <h6 class="invalid-feedback"><?= form_error('temps_activite'); ?></h6>
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
            </form>
            </div>
        </div>      
    </div>
</div>
           
                        
                        
                        
                       
   
                    


                        
                       
                    
           
   




<script src="/adopt-kitty/assets/js/test.js"></script>

<!-- ------------------------- 
     Erreur icones bootstrap des champs 
            -------------------------- -->
<script>
    // A VERIFIER 
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





    // Pop up pour l'etape 1 qui enumère chaque input/select
function validateStep1(currentStep) {
    var civileUser = currentStep.find("select[name='civile_user']").val().trim();
    var nomUser = currentStep.find("input[name='nom_user']").val().trim();
    var prenomUser = currentStep.find("input[name='prenom_user']").val().trim();
    var ageUser = currentStep.find("select[name='age_user']").val().trim();
    var emailUser = currentStep.find("input[name='email_user']").val().trim();
    var adresseUser = currentStep.find("input[name='adresse_user']").val().trim();
    var villeUser = currentStep.find("input[name='ville_user']").val().trim();
    var codepostalUser = currentStep.find("input[name='codepostal_user']").val().trim();
    var telUser = currentStep.find("input[name='tel_user']").val().trim();
    
    if (
        civileUser === "" ||
        nomUser === "" ||
        prenomUser === "" ||
        ageUser === "" ||
        emailUser === "" ||
        adresseUser === "" ||
        villeUser === "" ||
        codepostalUser === "" ||
        telUser === ""
    ) {
        showFieldError(
            currentStep,
            "Veuillez remplir tous les champs de l'étape 1."
        );
        return false;
    }

    return true;
}
    // Pop up pour l'etape 2 qui enumère chaque input/select
function validateStep2(currentStep) {
    var raisonAdopt = currentStep.find("textarea[name='raison_adopt']").val();
    var accueilAnimaux = currentStep.find("select[name='accueil_animaux']").val();
    var animauxFoyer = currentStep.find("select[name='animaux_foyer']").val();
    var othersAnimaux = currentStep.find("input[name='others_animaux']").val().trim();
    var ageAnimaux = currentStep.find("select[name='age_animaux']").val();
    var expAnimaux = currentStep.find("textarea[name='exp_animaux']").val().trim();
    var animaux_domestiques = currentStep.find("select[name='animaux_domestiques']").val().trim();
   
    var chiensRadio = currentStep.find("input[name='chiens_radio']:checked").val();
    var chatsRadio = currentStep.find("input[name='chats_radio']:checked").val();
    var oiseauxRadio = currentStep.find("input[name='oiseaux_radio']:checked").val();
    var autresRadio = currentStep.find("input[name='autres_radio']:checked").val();
    
    if (!chiensRadio || !chatsRadio || !oiseauxRadio || !autresRadio ||
        raisonAdopt === "" ||
        accueilAnimaux === "" ||
        animauxFoyer === "" ||
        othersAnimaux === "" ||
        ageAnimaux === "" ||
        expAnimaux === "" ||
        animauxDomestiques === "" 

    ) {
        showFieldError(
            currentStep,
            "Veuillez remplir tous les champs de l'étape 2."
        );
        return false;
    }

    return true;
}
// Pop up pour l'etape 3 qui enumère chaque input/select
function validateStep3(currentStep) {
	var typeLogement = currentStep.find("select[name='type_logement']").val();
	var exterieurUser = currentStep.find("select[name='exterieur_user']").val();

	if (exterieurUser === "oui") {
		var typeExterieur = currentStep.find("select[name='type_exterieur']").val();
	}

	var situationFoyer = currentStep.find("select[name='situation_foyer']").val();
	var enfantsFoyer = currentStep.find("select[name='enfants_foyer']").val();

	if (enfantsFoyer === "oui") {
		var nbrEnfants = currentStep.find("select[name='nbr_enfants']").val();
	}

	var activiteFamille = currentStep
		.find("select[name='activite_famille']")
		.val();
	if (situationFoyer == "couple") {
		var activiteConjoint = currentStep
			.find("select[name='activite_conjoint']")
			.val();
	}
	var tempsActivite = currentStep.find("select[name='temps_activite']").val();
	

	if (
		typeLogement === "" ||
		exterieurUser === "" ||
		typeExterieur === "" ||
		situationFoyer === "" ||
		activiteFamille === "" ||
		activiteConjoint === "" ||
		enfantsFoyer === "" ||
		nbrEnfants === "" ||
		tempsActivite === "" 
		
	) {
		showFieldError(
			currentStep,
			"Veuillez remplir tous les champs de l'étape 3."
		);
		return false;
	}

	return true;
}





//Systeme pour afficher/masquer type_exterieur en fonction d'exterieur_user
document.addEventListener("DOMContentLoaded", function () {
	var exterieurUserSelect = document.getElementById("exterieur_user");

	var typeExterieurDiv = document.getElementById("type_exterieur_div");
	var typeExterieur = document.getElementById("type_exterieur");

	exterieurUserSelect.addEventListener("change", function () {
		if (
			exterieurUserSelect.value === "non" ||
			exterieurUserSelect.value === ""
		) {
			typeExterieurDiv.classList = "col-md-6 mb-3 d-none";
			typeExterieur.required = false;
			typeExterieur.value = "";
		} else {
			typeExterieurDiv.classList = "col-md-6 mb-3 d-block";
			typeExterieur.required = true;
		}
	});
});

//Systeme pour apparaitre/dispparaitre situation_foyer en fonction d'enfants_foyer & activite_conjoint + famille
document.addEventListener("DOMContentLoaded", function () {
	var situationFoyerSelect = document.getElementById("situation_foyer");

	var enfantsFoyerDiv = document.getElementById("enfants_foyer_div");
	var enfantsFoyer = document.getElementById("enfants_foyer");

	var activitefamilleDiv = document.getElementById("activite_famille_div");
	var activitefamille = document.getElementById("activite_famille");

	var activiteconjointDiv = document.getElementById("activite_conjoint_div");
	var activiteconjoint = document.getElementById("activite_conjoint");

	situationFoyerSelect.addEventListener("change", function () {
		if (situationFoyerSelect.value === "") {
			enfantsFoyerDiv.classList = "col-md-6 mb-3 d-none";
			enfantsFoyer.required = false;

			activiteconjointDiv.classList = "col-md-6 mb-3 d-none";
			activiteconjoint.required = false;

			activitefamilleDiv.classList = "col-md-6 mb-3 d-none";
			activitefamille.required = false;
			enfantsFoyer.value = "";
		} else {
			if (situationFoyerSelect.value === "seul") {
				activitefamilleDiv.classList = "col-md-6 mb-3 d-block";
				activitefamille.required = true;
				activitefamille.value = "";
				activiteconjoint.required = false;
				activiteconjointDiv.classList = "col-md-6 mb-3 d-none";
			}
			if (situationFoyerSelect.value === "couple") {
				activitefamilleDiv.classList = "col-md-6 mb-3 d-block";
				activitefamille.required = true;
				activitefamille.value = "";

				activiteconjointDiv.classList = "col-md-6 mb-3 d-block";
				activiteconjoint.required = true;
				activiteconjoint.value = "";
			}
			enfantsFoyerDiv.classList = "col-md-6 mb-3 d-block";
			enfantsFoyer.required = true;
		}
	});
});

//Systeme pour apparaitre/disparaitre enfants_foyer en fonction nbr_enfants_foyer
document.addEventListener("DOMContentLoaded", function () {
	var enfantsFoyerSelect = document.getElementById("enfants_foyer");

	var enfantsnbrDiv = document.getElementById("nbr_enfants_div");
	var enfantsnbr = document.getElementById("nbr_enfants");

	enfantsFoyerSelect.addEventListener("change", function () {
		if (enfantsFoyerSelect.value === "" || enfantsFoyerSelect.value === "non") {
			enfantsnbrDiv.classList = "col-md-6 mb-3 d-none";
			enfantsnbr.required = false;
			enfantsnbr.value = "";
		} else {
			enfantsnbrDiv.classList = "col-md-6 mb-3 d-block";
			enfantsnbr.required = true;
		}
	});
});






//Systeme pour les variables nbr_animaux + btn [voir ci dessous] 
document.addEventListener("DOMContentLoaded", function () {
    var animauxFoyerSelect = document.getElementById('select[name="animaux_foyer"]');
    var AnimauxRadioDiv = document.getElementById("animaux_radio_div");
    var autresRadioInputs = document.querySelectorAll('input[name="autres_radio"]');
    var othersAnimauxInput = document.getElementById("others_animaux_div");
    var othersInput = document.getElementById("others_animaux");
    var chiensRadioInputs = document.querySelectorAll('input[name="chiens_radio"]');
    var chatsRadioInputs = document.querySelectorAll('input[name="chats_radio"]');
    var oiseauxRadioInputs = document.querySelectorAll('input[name="oiseaux_radio"]');
	var ageAnimauxDiv = document.getElementById("age_animaux_div");
	var ageAnimaux = document.getElementById("age_animaux");
	var expAnimauxDiv = document.getElementById('exp_animaux_div');
	var expAnimaux = document.getElementById('exp_animaux');

    // Masquer et réinitialiser les champs et les boutons radio à l'arrivée sur la page
    othersAnimauxInput.classList.add("d-none");
    othersInput.value = "";
    autresRadioInputs.forEach(radio => {
        radio.checked = false;
    });
    chiensRadioInputs.forEach(radio => {
        radio.checked = false;
    });
    chatsRadioInputs.forEach(radio => {
        radio.checked = false;
    });
    oiseauxRadioInputs.forEach(radio => {
        radio.checked = false;
    });

    // Afficher/masquer les radios "animaux_radio_div" en fonction de "nbr_animaux"
    function toggleAnimauxRadio() {
        if (animauxFoyerSelect.value === "non" || animauxFoyerSelect.value === "") {
            AnimauxRadioDiv.classList.add("d-none");
            othersInput.required = false;
            othersInput.value = "";
            othersAnimauxInput.classList.add("d-none");
            autresRadioInputs.forEach(radio => {
                radio.checked = false;
            });
            chiensRadioInputs.forEach(radio => {
                radio.checked = false;
            });
            chatsRadioInputs.forEach(radio => {
                radio.checked = false;
            });
            oiseauxRadioInputs.forEach(radio => {
                radio.checked = false;
            });
//Masquer detail et age en fonction oui/non
            expAnimauxDiv.classList.add("d-none");
            expAnimaux.required = false;
            expAnimaux.value = "";

			ageAnimauxDiv.classList.add("d-none");
            ageAnimaux.required = false;
            ageAnimaux.value = "";

        } else if (nbrAnimauxSelect.value === "oui") {
			expAnimauxDiv.classList.remove("d-none");
			expAnimaux.required = true;
            AnimauxRadioDiv.classList.remove("d-none");
			ageAnimauxDiv.classList.remove("d-none");
			ageAnimaux.required = true;
			
            toggleOthersAnimaux();
        }
    }

    // Réinitialiser et masquer "others_animaux_div" si aucune option 1, 2, ou 3 n'est sélectionnée
    function toggleOthersAnimaux() {
        var selectedValue = document.querySelector('input[name="autres_radio"]:checked')?.value;

        if (selectedValue === "0" || selectedValue === undefined) {
            othersAnimauxInput.classList.add("d-none");
            othersInput.required = false;
            othersInput.value = "";
        } else {
            othersAnimauxInput.classList.remove("d-none");
            othersInput.required = true;
        }
    }

    // Appeler les fonctions lorsqu'un changement est détecté dans "nbr_animaux"
    animauxFoyerSelect.addEventListener("change", function () {
        toggleAnimauxRadio();
    });

    // Appeler la fonction pour afficher/masquer les radios "animaux_radio_div" au chargement initial
    toggleAnimauxRadio();

    // Appeler les fonctions lorsqu'un changement est détecté dans les boutons radio "autres_radio"
    autresRadioInputs.forEach(radio => {
        radio.addEventListener("change", function () {
            toggleOthersAnimaux();
        });
    });
});

</script>