<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>js</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<style>

		body,
		p { margin: 0; }

		.box {
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);

			/*-webkit-transform: translate(0,0);
			transform: translate(0,0);*/
		}

		img { display: block; }
	
	</style>
</head>
<body>
	<?php 
		
		for( $i = 1; $i <= 200; $i++ ) {

			echo '<div class="box"><img src="images/guzik.jpg" width="100" height="100" alt=""></div>';

		}

	?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>

		setTimeout(function() {

    		$('body').find('.box').removeClass('box');


    	}, 2000);

    	
   	

	</script>
	

	
	
	
</body>
</html>