<?php
	//phpt
	$username = "John";
	if($username == "Smith") {
		echo "Salut!";
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Nom : <?php echo $username; ?><br>
		Nom : <?= $username; ?><br>
		<?= //phpe 
			$username ?>
	</body>
</html>







