<?php
	
	include 'functions.php';

	if ( isset($_POST["Submit"]) ){
		$precision = $_POST["precision"];
	}
	$previous_inputs = array(
		0 => "0",
		1 => "0",
		2 => "0",
	);
?>

<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<title>Calculate PI to Nth Digits</title>
	</head>
	

	<body>
		<h1>Calculate PI - Karan's Modification</h1>
		<form  method="POST" action=" ?">
		<p>Number of Digits: <input type="text" name="precision" /><input type="submit" value="Submit" name="Submit"/></p>
		</form>
		<?php
			$i = 0;
				if(isset($_POST["precision"])){
				$pi = bcpi($precision);
				$previous_inputs[$i] = $pi;
				$i++;
				
			}
		?>
		<textarea name="myTextarea" placeholder="Previous Inputs" cols="30" rows="15" required>
			<?php 
				echo $pi;
			?>
		</textarea>
	</body>
</html>