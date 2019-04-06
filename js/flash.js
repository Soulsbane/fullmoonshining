$(document).ready(function () { initRainCanvas(200); });

function initRainCanvas(interval) {
	window.requestAnimationFrame(animate);
	flash();
}

function animate() {
	window.requestAnimationFrame(animate);
}

function flash() {
	var randomTimeout = (Math.random() * 8 + 2) * 1000;

	setTimeout(function () {
		setFlashClass();
		flash();
	}, randomTimeout);
}

function setFlashClass() {
	$(".flashDiv").addClass("flashing");
	window.setTimeout(function () { $(".flashDiv").removeClass("flashing"); }, 2000);
}
