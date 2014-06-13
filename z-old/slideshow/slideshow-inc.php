	<?php
		// Slideshow Settings
		$numImages = 2;						// Total number of images
		$imagePath = 'images/slideshow/';	// Where to find the images
		$imageFilenameBase = 'ss_';	// Images are named this with and appended order number starting at "1"
	?>
	<script type="text/javascript" src="slideshow/coin-slider.js"></script>
	<link type="text/css" href="slideshow/coin-slider-styles.css" rel="stylesheet" />
	<script language="javascript">
		$(document).ready(function() {
			$('#module_slideshow').coinslider({ 
				width: 640,
				height: 270,
				navigation: false, 
				delay: 5000,
				sDelay: 3,
				titleSpeed: 500,
				opacity: 0.7,
				effect: 'rain',
				spw: 4,
				sph: 4,
				links : false,
				hoverPause: false						
			});
		});
	</script>
	<div align="center">
		<div id="module_slideshow">
			<?php
				for( $x=1; $x<=$numImages; $x++ ){
					echo '<img src="'.$imagePath.$imageFilenameBase.$x.'.png">';
				}
			?>
		</div>
	</div>
