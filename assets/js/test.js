$(document).ready(function () {
	var currentTab = 0;
	tabShow(currentTab);

	$("#nextBtn").click(function () {
		if (validateForm()) {
			nextTab();
		}
	});

	$("#nextBtn2").click(function () {
		nextTab();
	});

	$("#prevBtn").click(function () {
		prevTab();
	});

	function tabShow(n) {
		var x = $(".step");
		x.hide();
		x.eq(n).show();

		if (n === 0) {
			$("#prevBtn").hide();
			$("#nextBtn2").hide();
			$("#nextBtn").show();
		} else if (n === x.length - 1) {
			$("#prevBtn").show();
			$("#nextBtn").hide();
			$("#nextBtn2").show();
		} else {
			$("#prevBtn").show();
			$("#nextBtn").show();
			$("#nextBtn2").hide();
		}
	}

	function nextTab() {
		if (currentTab === 1 && !validateForm()) {
			return false;
		}
		currentTab++;
		tabShow(currentTab);
	}

	function prevTab() {
		currentTab--;
		tabShow(currentTab);
	}

	function validateForm() {
		var currentStep = $(".step").eq(currentTab);

		// Vérifier la validation des champs pour l'étape actuelle
		if (currentTab === 0) {
			var nom = $("#nom_user").val().trim();
			var prenom = $("#prenom_user").val().trim();
			var age = $("#age_user").val().trim();
			var email = $("#email_user").val().trim();
			var adresse = $("#adresse_user").val().trim();
			var ville = $("#ville_user").val().trim();
			var codepostal = $("#codepostal_user").val().trim();
			var tel = $("#tel_user").val().trim();

			if (
				nom === "" ||
				prenom === "" ||
				age === "" ||
				email === "" ||
				adresse === "" ||
				ville === "" ||
				codepostal === "" ||
				tel === ""
			) {
				alert("Veuillez remplir tous les champs de l'étape 1.");
				return false;
			}
		}

		return true;
	}
});
