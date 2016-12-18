<!DOCTYPE html>
<html>
	<head>
		<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Flipping A Coin</title>
	</head>
	<body>
	<p>How many times do you have to flip a coin to get three tails in a row?</p>
	<?php
	$tailsCount = 0;
	$flipCount = 0;

	while ($tailsCount < 3) {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip) {
			$tailsCount++;
			echo "<div class=\"coin\">H</div>";
		}
		else {
			$tailsCount = 0;
			echo "<div class=\"coin\">T</div>";
		}
	}
	echo "<p>It took {$flipCount} flips to get three tails in a row!</p>";
	?>
	</body>
</html>
