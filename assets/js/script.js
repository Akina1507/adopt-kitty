document.addEventListener('DOMContentLoaded', function() {
	var exterieurUserSelect = document.getElementById('exterieur_user');
	var typeExterieurDiv = document.getElementById('type_exterieur_div');
  
	exterieurUserSelect.addEventListener('change', function() {
	  if (exterieurUserSelect.value === 'oui') {
		typeExterieurDiv.style.display = 'block';
	  } else {
		typeExterieurDiv.style.display = 'none';
	  }
	});
  });

  //Exterieur formulaire famille page 2

  document.addEventListener('DOMContentLoaded', function() {
	var situationFoyerSelect = document.getElementById('situation_foyer');
	var enfantsFoyerInput = document.getElementById('enfants_foyer_input');
	var nbrEnfantsInput = document.getElementById('nbr_enfants_input');
	var ageEnfantsInput = document.getElementById('age_enfants_input');
  
	situationFoyerSelect.addEventListener('change', function() {
	  var selectedOption = situationFoyerSelect.options[situationFoyerSelect.selectedIndex].value;
  
	  if (selectedOption === 'seul' || selectedOption === 'couple') {
		enfantsFoyerInput.style.display = 'block';
	  } else {
		enfantsFoyerInput.style.display = 'none';
		nbrEnfantsInput.style.display = 'none';
		ageEnfantsInput.style.display = 'none';
	  }
	});
  
	var enfantsFoyerSelect = document.getElementById('enfants_foyer');
	enfantsFoyerSelect.addEventListener('change', function() {
	  var selectedOption = enfantsFoyerSelect.options[enfantsFoyerSelect.selectedIndex].value;
  
	  if (selectedOption === 'oui') {
		nbrEnfantsInput.style.display = 'block';
		ageEnfantsInput.style.display = 'block';
	  } else {
		nbrEnfantsInput.style.display = 'none';
		ageEnfantsInput.style.display = 'none';
	  }
	});
  });

  //Situation foyer + enfants formluaire famille page 2










// Gestionnaire d'événement pour la sélection de "animaux_famille"
document.getElementById("animaux_famille").addEventListener("change", function() {
    afficherMasquerElements();
});

// Gestionnaire d'événement pour la sélection de "animaux_vie"
document.getElementById("animaux_vie").addEventListener("change", function() {
    var nbrAnimauxInput = document.getElementById("nbr_animaux_input");
    var ageAnimauxVieInput = document.getElementById("age_animaux_vie_input");

    // Afficher ou masquer les select "nbr_animaux" et "age_animaux_vie" en fonction de la sélection de "animaux_vie"
    if (this.value === "oui") {
        nbrAnimauxInput.style.display = "block";
        ageAnimauxVieInput.style.display = "block";
    } else {
        nbrAnimauxInput.style.display = "none";
        ageAnimauxVieInput.style.display = "none";
    }
});

// Animaux famille +nbr,age,vie formulaire famille page 3

$(document).ready(function() {
	// Activer le carousel
	$('#carouselExample').carousel();

	// Gérer la navigation précédente et suivante
	$('.carousel-control-prev').click(function() {
		$('#carouselExample').carousel('prev');
	});

	$('.carousel-control-next').click(function() {
		$('#carouselExample').carousel('next');
	});
});

