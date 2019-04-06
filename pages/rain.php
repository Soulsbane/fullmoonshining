<div id="nighttimeForestBackground">
	<div id="rain"></div>

	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/rain.js"></script>
	<script src="js/flash.js"></script>

	<canvas class="rainCanvas" width="100%" height="100%">Canvas Not Supported! Please Update Your Browser to the
		Latest Version.</canvas>
	<div class="flashDiv"></div>

	<!-- Chrome and Firefox no longer autoplay by default. This fixes it! -->
	<iframe src="assets/sounds/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
	<script>
		var sound = new Howl({
			src: ['assets/sounds/rain-thunder.mp3'],
			autoplay: true,
			loop: true,
			volume: 0.5,
		});

		sound.play();
	</script>
</div>
