<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/adopt-kitty/assets/css/test.css">

<style>
    .invalid-feedback {
        color: red;
    }
</style>

<div class="container form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <form class="upe-mutistep-form needs-validation" novalidate id="Upemultistepsform" action="<?= site_url('Famille1/step1'); ?>" method="post">
                <div class="step-header d-flex mb-2">
                    <span class="steplevel active">Etape 1</span>
                    <span class="steplevel">Etape 2</span>
                    <span class="steplevel">Etape 3</span>
                </div>
                <div class="step">
                    <div class="row">
                        <h3>Devenir famille d'accueil</h3>
                        <div class="col-md-6 mb-3">
                            <label for="nom_user">Nom* :</label>
                            <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required>
                            <?= form_error('nom_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prenom_user">Prénom* :</label>
                            <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom" required>
                            <?= form_error('prenom_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_user">Age* :</label>
                            <input class="form-control" type="text" name="age_user" id="age_user" placeholder="Votre age" required>
                            <?= form_error('age_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email_user">Email* :</label>
                            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Votre adresse email" required>
                            <?= form_error('email_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="adresse_user">Adresse* :</label>
                            <input class="form-control" type="text" name="adresse_user" id="adresse_user" placeholder="Votre adresse" required>
                            <?= form_error('adresse_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ville_user">Ville* :</label>
                            <input class="form-control" type="text" name="ville_user" id="ville_user" placeholder="Votre ville" required>
                            <?= form_error('ville_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="codepostal_user">Code postal* :</label>
                            <input class="form-control" type="number" name="codepostal_user" id="codepostal_user" placeholder="Votre code postal" required>
                            <?= form_error('codepostal_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tel_user">Téléphone* :</label>
                            <input class="form-control" type="number" name="tel_user" id="tel_user" placeholder="Votre numéro de téléphone" required>
                            <?= form_error('tel_user'); ?>
                        </div>
                        <div class="d-flex btn-row">
                            <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                        </div>
                        <h6>* Le champ est obligatoire</h6>
                    </div>
                </div>


                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type_logement">Quel type de logement avez-vous ?*</label>
                            <select class="form-select" name="type_logement" id="type_logement" required>
                                <option value="">Sélectionnez</option>
                                <option value="maison">Maison</option>
                                <option value="appartement">Appartement</option>
                            </select>
                            <?= form_error('type_logement'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?*</label>
                            <select class="form-select" name="exterieur_user" id="exterieur_user" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('exterieur_user'); ?>
                        </div>
                        <div class="col-md-6 mb-3 d-none" id="type_exterieur_div">
                            <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
                            <select class="form-select" name="type_exterieur" id="type_exterieur">
                                <option value="">Sélectionnez</option>
                                <option value="terrasse">Terrasse</option>
                                <option value="jardin">Jardin</option>
                                <option value="balcon" class="balcon-option">Balcon</option>
                            </select>
                            <?= form_error('type_exterieur'); ?>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="situation_foyer">Quelle est la composition de votre foyer ?*</label>
                            <select class="form-select" name="situation_foyer" id="situation_foyer" required>
                                <option value="">Sélectionnez</option>
                                <option value="seul">Seul</option>
                                <option value="couple">En couple</option>
                            </select>
                            <?= form_error('situation_foyer'); ?>
                        </div>

                        <div class="col-md-6 mb-3 d-none" id="activite_famille_div">
                            <label for="activite_famille">Quelle est votre situation actuelle ?*</label>
                            <select class="form-select" name="activite_famille" id="activite_famille">
                                <option value="">Sélectionnez</option>
                                <option value="Sans Emploi">Sans Emploi</option>
                                <option value="Salarie">Salarié(e)</option>
                                <option value="Etudiant">Étudiant</option>
                                <option value="Handicape">Handicapé</option>
                            </select>
                            <?= form_error('activite_famille'); ?>
                        </div>

                        <div class="col-md-6 mb-3 d-none" id="activite_conjoint_div">
                            <label for="activite_conjoint">Quelle est la situation actuelle de votre conjoint(e) ?</label>
                            <select class="form-select" name="activite_conjoint" id="activite_conjoint">
                                <option value="">Sélectionnez</option>
                                <option value="Sans Emploi">Sans Emploi</option>
                                <option value="Salarie">Salarié(e)</option>
                                <option value="Etudiant">Étudiant</option>
                                <option value="Handicape">Handicapé</option>
                            </select>
                            <?= form_error('activite_conjoint'); ?>
                        </div>

                        <div class="col-md-6 mb-3 d-none" id="enfants_foyer_div">
                            <label for="enfants_foyer">Avez vous des enfants dans votre foyer ?*</label>
                            <select class="form-select" name="enfants_foyer" id="enfants_foyer">
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('enfants_foyer'); ?>
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
                            <?= form_error('nbr_enfants'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="foyer_animaux_now">avez vous d'autres animaux chez vous ?*</label>
                            <input class="form-control" type="number" name="foyer_animaux_now" id="foyer_animaux_now" placeholder="1 heures, 2 heures.." required>
                            <?= form_error('foyer_animaux_now'); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                        <label for="temps_activite">Snouf.</label>
                            <select class="form-select" name="temps_activite" id="temps_activite" required>
                                <option value="">Sélectionnez</option>
                                <option value="time">1 à 3 heures</option>
                                <option value="times">3 à 5 heures</option>
                            </select>
                            <?= form_error('temps_activite'); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="foyer_animaux_now">Avez d'autres animaux dans votre foyer ?*</label>
                            <select class="form-select" name="foyer_animaux_now" id="foyer_animaux_now" required>
                                <option value="">Sélectionnez</option>
                                <option value="chiens">Chiens</option>
                                <option value="chats">Chats</option>
                                <option value="oiseaux">Oiseaux</option>
                                <option value="autres">Autres animaux ? Merci de préciser ci-dessous.</option>
                            </select>
                            <?= form_error('foyer_animaux_now'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="raison_famille">Quelles sont les raisons qui vous poussent à devenir famille d'accueil ?*</label>
                            <textarea class="form-control" name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
                            <?= form_error('raison_famille'); ?>
                        </div>
                        <div class="d-flex btn-row">
                            <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                            <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
                        </div>
                        <h6>* Le champ est obligatoire</h6>
                    </div>
                </div>


                <div class="step">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="animaux_famille">Avez-vous eu par le passé des animaux dans votre foyer ?*</label>
                            <select class="form-select" name="animaux_famille" id="animaux_famille" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('animaux_famille'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="animaux_vie">Vos animaux sont-ils toujours en vie ?</label>
                            <select class="form-select" name="animaux_vie" id="animaux_vie" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?*</label>
                            <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux" required>
                            <?= form_error('nbr_animaux'); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
                            <select class="form-select" name="age_animaux_vie" id="age_animaux_vie" required>
                                <option value="">Sélectionnez</option>
                                <option value="junior">Junior</option>
                                <option value="adulte">Adulte</option>
                                <option value="senior">Sénior</option>
                            </select>
                            <?= form_error('age_animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="details_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
                            <textarea class="form-control" name="details_animaux_vie" id="details_animaux_vie" placeholder="races, activités, maladies..." required></textarea>
                            <?= form_error('details_animaux_vie'); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?*</label>
                            <select class="form-select" name="disponible_veto" id="disponible_veto" required>
                                <option value="">Sélectionnez</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                            <?= form_error('disponible_veto'); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Accepter les conditions générales</label>
                        </div>
                    </div>
                    <div class="d-flex btn-row">
                        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
                        <button type="submit">Envoyer</button>
                    </div>
                    <h6>* Le champ est obligatoire</h6>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="/adopt-kitty/assets/js/test.js"></script>




<script>
    //Icone error
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        const btn = document.getElementById('nextBtn')
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            btn.addEventListener('click', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>


<!-- API code postal -->
<script>
$(document).ready(function () {
    // Utilisez l'ID de votre champ de code postal
    var codePostalInput = $("#codepostal_user");

    // Lorsque l'utilisateur commence à taper dans le champ
    codePostalInput.on("input", function () {
        var inputVal = codePostalInput.val().trim();
        
        if (inputVal.length >= 2) { // Recherche à partir du 2ème caractère
            // Utilisez une API de service de code postal pour obtenir des suggestions
            // Ici, vous pouvez appeler votre propre service ou utiliser une API tierce
            // Exemple avec Adresse Data France (à titre d'illustration, nécessite un compte)
            var apiUrl = "https://api-adresse.data.gouv.fr/search/?q=" + inputVal;

            // Faites une requête AJAX à l'API de service de code postal
            $.ajax({
                url: apiUrl,
                method: "GET",
                success: function (data) {
                    // Traitez les données renvoyées par l'API
                    var suggestions = data.features;

                    // Affichez les suggestions dans une liste déroulante ou un autre format
                    // par exemple, en utilisant Bootstrap dropdown
                    var dropdown = $("#codepostal_suggestions");
                    dropdown.empty();

                    for (var i = 0; i < suggestions.length; i++) {
                        var suggestion = suggestions[i].properties;
                        var option = $("<a class='dropdown-item' href='#'>" + suggestion.postcode + " - " + suggestion.city + "</a>");
                        option.click(function () {
                            codePostalInput.val(suggestion.postcode);
                            dropdown.empty(); // Efface les suggestions après avoir cliqué
                        });
                        dropdown.append(option);
                    }

                    dropdown.show();
                },
                error: function () {
                    console.log("Erreur lors de la récupération des suggestions de code postal.");
                }
            });
        } else {
            $("#codepostal_suggestions").hide();
        }
    });
});
</script>