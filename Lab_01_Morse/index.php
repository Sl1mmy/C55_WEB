<?php
	require_once("action/indexAction.php");
	$data = execute();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Morse</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/global.css">
		<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
	</head>
	<body>
		<div id="background"></div>
		<div style="margin-left:300px;width:500px;position:relative;">
			<h1 style="margin-top:50px;">
				Outil de conversion Morse-ASCII

				<!-- À compléter -->

				<?php
					if($data){
						?>

						<textarea name="chaineMorse" cols="50" rows="15"><?= $data ?></textarea>
						<a href="localhost">Réessayer</a>
						<?php
					} else {
						?>
							<form action="" method="post">
								<p style="margin-top:50px;">chaine à convertir en morse</p>
								<textarea name="chaineMorse" cols="50" rows="15"></textarea>
								<p>chaine à convertir en ASCII</p>
								<textarea name="chaineAscii" cols="50" rows="15"></textarea>
								
								<button style="margin-left: 32%;">Convertir</button>

							</form>
						<?php
					}
				?>

			</h1>
		</div>
		<footer>
			<div>
				<h3>Outils de conversion pour le Morse</h3>
				<div>
					Le laboratoire consiste à faire un formulaire permettant de convertir une chaîne de caractères ASCII en morse, ou vice-versa. Étapes :
				</div>
				<ul>
					<li>Faire un formulaire avec deux textareas (<a href="images/avant.png">avant</a>).</li>
					<li>Lorsque le formulaire est envoyé au serveur, PHP converti la chaîne de caractères via une fonction <code>execute</code> dans le fichier <code>indexAction.php</code>. Utilisez les fonctions <code>encodeMorse</code> et <code>decodeMorse</code> disponibles dans le fichier <code>morse-utils.php</code>.</li>
					<li>La chaîne convertie est affichée (<a href="images/apres.png">après</a>).</li>
				</ul>
			</div>
		</footer>
	</body>
</html>