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
	<h1>Les mémos...</h1>
    <ul>
        <?php
            foreach ($data["list"] as $tab) {
            ?>
               <li><?= $tab[0] ?></li> 
            <?php
            }
        ?>
    </ul>