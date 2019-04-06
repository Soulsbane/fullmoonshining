<div id="nighttimeForestBackground">
	<!-- Chrome doen't autoplay. This fixes it! -->
	<iframe src="assets/sounds/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
	<script src="js/fireflies.js"></script>
	<script>
		var sound = new Howl({
			src: ['assets/sounds/cicada-at-night.mp3'],
			autoplay: true,
			loop: true,
			volume: 0.5,
		});

		sound.play();
	</script>
</div>
