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
