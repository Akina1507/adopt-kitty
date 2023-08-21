var currentTab = 0;
tabShow(currentTab);

function tabShow(n) {
	var x = $(".step");
	x.hide();
	x.eq(n).show();

	$(".steplevel").removeClass("active");
	$(".steplevel").eq(n).addClass("active");

	if (n === 0) {
		$("#prevBtn").hide();
	} else {
		$("#prevBtn").show();
	}

	if (n === x.length - 1) {
		$("#nextBtn").hide();
	} else {
		$("#nextBtn").show();
	}
}

function nextPrev(n) {
	var x = $(".step");
	if (n === 1 && !validateForm()) {
		return false;
	}
	currentTab += n;
	tabShow(currentTab);
}

function validateForm() {
	var currentStep = $(".step").eq(currentTab);

	// Réinitialiser les champs en erreur
	currentStep.find(".is-invalid").removeClass("is-invalid");

	// Vérifier la validation des champs pour l'étape actuelle
	var isValid = true;

	if (currentTab === 0) {
		isValid = validateStep1(currentStep);
	} else if (currentTab === 1) {
		isValid = validateStep2(currentStep);
	} else if (currentTab === 2) {
		isValid = validateStep3(currentStep);
	}

	return isValid;
}

function validateStep1(currentStep) {
	var nomUser = currentStep.find("input[name='nom_user']").val().trim();
	var prenomUser = currentStep.find("input[name='prenom_user']").val().trim();
	var ageUser = currentStep.find("select[name='age_user']").val().trim();
	var emailUser = currentStep.find("input[name='email_user']").val().trim();
	var adresseUser = currentStep.find("input[name='adresse_user']").val().trim();
	var villeUser = currentStep.find("input[name='ville_user']").val().trim();
	var codepostalUser = currentStep
		.find("input[name='codepostal_user']")
		.val()
		.trim();
	var telUser = currentStep.find("input[name='tel_user']").val().trim();

	if (
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

function validateStep2(currentStep) {
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
	var raisonFamille = currentStep
		.find("textarea[name='raison_famille']")
		.val()
		.trim();

	if (
		typeLogement === "" ||
		exterieurUser === "" ||
		typeExterieur === "" ||
		situationFoyer === "" ||
		activiteFamille === "" ||
		activiteConjoint === "" ||
		enfantsFoyer === "" ||
		nbrEnfants === "" ||
		tempsActivite === "" ||
		raisonFamille === ""
	) {
		showFieldError(
			currentStep,
			"Veuillez remplir tous les champs de l'étape 2."
		);
		return false;
	}

	return true;
}

function validateStep3(currentStep) {
	var animauxFamille = currentStep.find("select[name='animaux_famille']").val();
	var nbrAnimaux = currentStep.find("input[name='nbr_animaux']").val().trim();
	var othersAnimaux = currentStep.find("input[name='others_animaux']").val();
	var ageAnimauxVie = currentStep.find("select[name='age_animaux_vie']").val();
	var detailAnimauxVie = currentStep
		.find("textarea[name='detail_animaux_vie']")
		.val()
		.trim();
	var disponibleVeto = currentStep.find("select[name='disponible_veto']").val();

	if (
		animauxFamille === "selectionnez" ||
		othersAnimaux === "" ||
		nbrAnimaux === "" ||
		ageAnimauxVie === "" ||
		detailAnimauxVie === "" ||
		disponibleVeto === "selectionnez"
	) {
		showFieldError(
			currentStep,
			"Veuillez remplir tous les champs de l'étape 3."
		);
		return false;
	}

	return true;
}

function showFieldError(currentStep, errorMessage) {
	alert(errorMessage);
	currentStep.find(".is-invalid").removeClass("is-invalid");
	currentStep.find(".error-message").hide();

	// Ajouter la classe is-invalid et afficher le message d'erreur
	currentStep.find(".is-invalid").removeClass("is-invalid");
	currentStep.find(".error-message").show();
}

function showFieldErrors() {
	var currentStep = $(".step").eq(currentTab);
	var errorMessages = currentStep.find(".error-message");

	errorMessages.hide(); // Cacher tous les messages d'erreur

	errorMessages.each(function () {
		var errorMessage = $(this);
		var inputField = errorMessage.siblings("input, select, textarea");

		if (inputField.hasClass("is-invalid")) {
			errorMessage.show(); // Afficher le message d'erreur correspondant
		}
	});

	$(document).ready(function () {
		$(".upe-mutistep-form").submit(function (e) {
			e.preventDefault();
		});

		$(
			".upe-mutistep-form input, .upe-mutistep-form select, .upe-mutistep-form textarea"
		).blur(function () {
			validateField($(this));
		});

		$("#nextBtn").click(function () {
			if (validateStep1($(".step").eq(0))) {
				nextPrev(1);
			}
		});
	});

	function validateField(field) {
		var fieldValue = field.val().trim();
		var errorMessage = field.siblings(".error-message");

		if (fieldValue === "") {
			field.addClass("is-invalid");
			errorMessage.show();
		} else {
			field.removeClass("is-invalid");
			errorMessage.hide();
		}
	}
}

//Systeme pour apparaitre/dispparaitre type_exterieur en fonction d'exterieur_user
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

//Systeme pour apparaitre/dispparaitre enfants_foyer en fonction nbr_enfants_foyer
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

//Systeme pour apparaitre/dispparaitre type_exterieur en fonction d'exterieur_user
document.addEventListener("DOMContentLoaded", function () {
    var nbrAnimauxSelect = document.getElementById("nbr_animaux");
    var AnimauxRadioDiv = document.getElementById("animaux_radio_div");

    function toggleAnimauxRadio() {
        if (nbrAnimauxSelect.value === "non" || nbrAnimauxSelect.value === "") {
            AnimauxRadioDiv.classList.add("d-none");
        } else if (nbrAnimauxSelect.value === "oui") {
            AnimauxRadioDiv.classList.remove("d-none");
        }
    }

    // Appliquer le traitement initial au chargement de la page
    toggleAnimauxRadio();

    nbrAnimauxSelect.addEventListener("change", toggleAnimauxRadio);
});


