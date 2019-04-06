<div id="daytimeForestBackground">
	<div id="dust"></div>

	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/dust.js"></script>

	<!-- Chrome doen't autoplay. This fixes it! -->
	<iframe src="assets/sounds/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
	<script>
		var sound = new Howl({
			//src: ['sounds/cicada-mixdown.mp3'],
			src: ['assets/sounds/cicada-melbourne.mp3'],
			autoplay: true,
			loop: true,
			volume: 0.7,
		});

		sound.play();
	</script>
</div>
