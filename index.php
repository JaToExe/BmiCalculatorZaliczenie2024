<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
</head>
<body>
	<section class="container">
		<div class="claculator">
			<div class="forms">				
					<form action="index.php" method="post">
						<h1 class="tittle">Kalkulator BMI</h1><br>
						<h4 class="text">BMI jest wskaźnikiem, który jest obliczany przez porównanie wzrostu z masy ciała</h4>
						<input class="imput" placeholder="Podaj Imię" name="Name" type="text"><br>
						<input id="input" class="imput" placeholder="Podaj wzrost [m]" name="Hieght" type="text"><br>
						<input id="input" class="imput" placeholder="Podaj wagę [kg]" name="weight" type="text"><br>
						<input class="confirm" type="submit">
					</form>
			</div>
		</div>

		<div class="diet">
			<div class="info">
				<h1>
					<?php
					    ini_set('display_errors', 0);
						$name = $_POST['Name'];
						$Hieght = $_POST['Hieght']*$_POST['Hieght'];
						$weight = $_POST['weight'];
						$bmi = $_POST['weight']/$Hieght;

						echo "Cześć $name";
					?>
					<?php
						echo "Twoje BMI wynosi: $bmi"
					?>
				</h1>

				<h2 class="secondText">
					<?php
						if($bmi  < 18.5)
						   echo "$name zaobserwowaliśmy że możesz być niedożywiony";
						elseif($bmi  > 18.5 && $bmi  < 24.9)
							echo "$name wszystko jest w normie";
						elseif($bmi  > 24.9 && $bmi  < 29.9)
							echo "$name zaobserwowaliśmy że możesz mieć nadwagę";
						elseif($bmi  > 29.9 && $bmi  < 34.9)
							echo "$name zaobserwowaliśmy że możesz mieć problemy z nadwagą";
						else
							echo "$name zaobserwowaliśmy że możesz mieć duże problemy z nadwagą";
					?>
				</h2>
			</div>
		</div>
	</section>
</body>
</html>