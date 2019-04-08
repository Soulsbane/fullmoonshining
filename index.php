<?php
require_once("pages/header.php");

function isRaining()
{
	if (mt_rand(0, 24) > 3) {
		return false;
	}

	return true;
}

function isNight()
{
	if (mt_rand(0, 24) > 12) {
		return false;
	}

	return true;
}

if (isNight()) {// Night
	if (isRaining()) {
		require_once("pages/rain.php");
	} else {
		require_once("pages/fireflies.php");
	}
} else { // Day
	//FIXME: Still need to handle daytime rain.
	if (isRaining()) {
		require_once("pages/rain.day.php");
	} else {
		require_once("pages/summer.php");
	}
}

require_once("pages/footer.php");
?>
