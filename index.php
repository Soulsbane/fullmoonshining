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

/*if (isNight()) {// Night
	if (isRaining()) {
		header('Location: http://fullmoonshining.com/rain');
	} else {
		header('Location: http://fullmoonshining.com/higurashi');
	}
} else { // Day
	if (isRaining()) {
		header('Location: http://fullmoonshining.com/rain/index-day.html');
	} else {
		header('Location: http://fullmoonshining.com/natsu');
	}
}*/
?>
<h1>Hello World</h1>
<?php
require_once("pages/footer.php");
?>
