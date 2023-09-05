<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i=0; $i < 10; $i++) { 
				//phpr = inverse de phpt
				?>
				<input type='radio' name='age'><?= $i ?><br>
				<?php
			}

//          -----------

			$i = 10;
			while ($i > 0) {
				$i--;
				echo $i;
			}

//          -----------

			$tab = [];
			$tab[] = "elem1"; //push
			$tab[] = "elem2";
			$tab[] = "elem3";
			$tab[] = "elem4";

			foreach ($tab as $element) {
				echo $element;
			}

//          -----------

			var_dump($tab)

		?>
		


	</body>
</html>







