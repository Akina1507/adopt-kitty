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

	// Vérifier la validation des champs pour l'étape actuelle
	if (currentTab === 0) {
		var nomUser = currentStep.find("input[name='nom_user']").val().trim();
		var prenomUser = currentStep.find("input[name='prenom_user']").val().trim();
		var ageUser = currentStep.find("input[name='age_user']").val().trim();
		var emailUser = currentStep.find("input[name='email_user']").val().trim();
		var adresseUser = currentStep
			.find("input[name='adresse_user']")
			.val()
			.trim();
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
			alert("Veuillez remplir tous les champs de l'étape 1.");
			return false;
		}
	} else if (currentTab === 1) {
		var typeLogement = currentStep.find("select[name='type_logement']").val();
		var exterieurUser = currentStep.find("select[name='exterieur_user']").val();
		var typeExterieur = currentStep.find("select[name='type_exterieur']").val();
		var situationFoyer = currentStep
			.find("select[name='situation_foyer']")
			.val();
		var nbrEnfants = currentStep.find("input[name='nbr_enfants']").val().trim();
		var ageEnfants = currentStep.find("input[name='age_enfants']").val().trim();
		var activiteFamille = currentStep
			.find("select[name='activite_famille']")
			.val();
		var tempsActivite = currentStep
			.find("input[name='temps_activite']")
			.val()
			.trim();
		var raisonFamille = currentStep
			.find("textarea[name='raison_famille']")
			.val()
			.trim();

		if (
			typeLogement === "selectionnez" ||
			exterieurUser === "selectionnez" ||
			typeExterieur === "selectionnez" ||
			situationFoyer === "selectionnez" ||
			activiteFamille === "selectionnez" ||
			tempsActivite === "" ||
			raisonFamille === ""
		) {
			alert("Veuillez remplir tous les champs de l'étape 2.");
			return false;
		}
	} else if (currentTab === 2) {
		var animauxFamille = currentStep
			.find("select[name='animaux_famille']")
			.val();
		var nbrAnimaux = currentStep.find("input[name='nbr_animaux']").val().trim();
		var ageAnimauxVie = currentStep
			.find("select[name='age_animaux_vie']")
			.val();
		var detailAnimauxVie = currentStep
			.find("textarea[name='detail_animaux_vie']")
			.val()
			.trim();
		var disponibleVeto = currentStep
			.find("select[name='disponible_veto']")
			.val();

		if (
			animauxFamille === "selectionnez" ||
			nbrAnimaux === "" ||
			ageAnimauxVie === "" ||
			detailAnimauxVie === "" ||
			disponibleVeto === "selectionnez"
		) {
			alert("Veuillez remplir tous les champs de l'étape 3.");
			return false;
		}
	}

	return true;
}
