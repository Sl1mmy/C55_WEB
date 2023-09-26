<?php
	require_once("action/indexAction.php");

	$data = execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post-its</title>
	<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
</head>
<body>
	<form action="" method="post">
		<div>
			qu'avez vous en tête : <input name="text" type="text">
			x : <input name="x" type="text" style="width:20px;">
			y : <input name="y" type="text" style="width:20px;"> 
			<button>Ajouter</button>
		</div>
		<div>
			<a href="consulter.php">consulter</a> | <a href="index.php">supprimer</a>
		</div>
	</form>

	<?php
		foreach ($data["list"] as $tab) {
		?>
			<div style="position:absolute; 
			left: <?=$tab[2]?>px; 
			top: <?=$tab[1]?>px; 
			background-image: url(images/post-it.png); 
			height: 300px; width: 300px">
				<div style="position:relative; left:50%; top:50%"><?=$tab[0]?></div>
			</div>
		<?php
		}
	?>


	<footer>
		<div>
			<h3>Post-its (les sessions en PHP)</h3>
			<div>
				Faire un formulaire qui permet de sauvegarder des petites notes. Celes-ci seront affichées sur des <a href="images/result1.png">post-its</a>. Il doit être possible aussi de :
			</div>
			<ul>
				<li>Effacer la liste de notes</li>
				<li>Afficher les notes sous forme de <a href="images/result2.png">liste</a></li>
			</ul>
			<div>Étapes:</div>
			<ol>
				<li>Faire un formulaire avec 3 champs: texte, x et y</li>
				<li>
					Lorsque le formulaire est envoyé, faire en sorte que PHP sauvegarde les informations dans une variable de session (un tableau)<br><br>
					Pseudocode de l'action:
					<code class="footer-code-block">
						1- Si le tableau de post-its n'existe pas en session, le créer

						2- S'il y a des données de formulaire, alors
						2.1- Créer un tableau de 3 éléments (pour le texte, le x et le y spécifiés dans le formulaire)
						2.2- Ajouter ce tableau dans le tableau de post-its (voir étape 1)
					</code>
				</li>
				<li>Faire afficher les post-its qui sont sauvegardés en session via une boucle</li>
				<li>Faire l'autre affichage (dans une autre page Web), puis la fonctionnalité de suppression</li>
			</ol>
		</div>
	</footer>
</body>
</html>