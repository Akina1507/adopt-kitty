var currentTab = 0;
tabShow(currentTab);

function tabShow(n) {
	var x = document.getElementsByClassName("step");
	x[n].style.display = "block";
	if (n == 0) {
		document.getElementById("prevBtn").style.display = "none";
	} else {
		document.getElementById("prevBtn").style.display = "inline";
	}
	if (n == x.length - 1) {
		document.getElementById("nextBtn").innerHTML = "submit";
	} else {
		document.getElementById("nextBtn").innerHTML = "Next";
	}
	activelevel(n);
}
function nextPrev(n) {
	var x = document.getElementsByClassName("step");
	x[currentTab].style.display = "none";
	currentTab = currentTab + n;
	if (currentTab >= x.length) {
		document.getElementById("Upemultistepsform").submit();
		return false;
	}
	tabShow(currentTab);
}
function backPrev(n) {
	var x = document.getElementsByClassName("step");
	x[n].style.display = "block";
}
function activelevel(n) {
	var i,
		x = document.getElementsByClassName("steplevel");
	for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" active", "");
	}
	x[n].className += " active";
}
$(document).ready(function () {
	// Étape 1
	$(".step-header .steplevel").eq(1).removeClass("active"); // Désactive l'étape 2 dans l'en-tête
	$(".step").eq(0).show(); // Affiche l'étape 1

	$("#suivBtn").click(function () {
		// Vérifie si tous les champs de l'étape 1 sont valides
		if (
			$("#nom_user").val() &&
			$("#prenom_user").val() &&
			$("#age_user").val() &&
			$("#email_user").val() &&
			$("#adresse_user").val() &&
			$("#ville_user").val() &&
			$("#codepostal_user").val() &&
			$("#tel_user").val()
		) {
			$(".step-header .steplevel").eq(1).addClass("active"); // Active l'étape 2 dans l'en-tête
			$(".step").eq(0).hide(); // Masque l'étape 1
			$(".step").eq(1).show(); // Affiche l'étape 2
			$("#precBtn").show(); // Affiche le bouton "Précédent"
		} else {
			alert("Veuillez remplir tous les champs de l'étape 1."); // Affiche un message d'erreur si des champs sont vides
		}
	});
});
