<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Product Of Numbers" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Product Of Numbers</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Product Of Numbers</h1></center>';
			echo '<img src=./images/multiplication.png width="35%">';
			echo "<center><p><br>Enter your multiplicand and multiplier, then the web page will display the result.</p";
		?>

		<!-- Textfield -->
		<form method = "post">   
			<p>Multiplicand: </p><input type="number" name="userNumber1" step="1" min="0">   
			<br><br>  
			<p>Multiplier: </p><input type="number" name="userNumber2" step="1" min="0">   
			<br><br>
			<input type = "submit" name = "submit">
		</form>
		<br>
			
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['submit'])) {  
				$numb1 = intval($_POST['userNumber1']);   
				$numb2 = intval($_POST['userNumber2']);
				$sum = 0; 

				for ($counter = 0; $counter < $numb1; $counter++) {
					$sum = $sum + $numb2;
				}

				echo "The sum is " . $sum;
			}
		?>
	</body>
</html>