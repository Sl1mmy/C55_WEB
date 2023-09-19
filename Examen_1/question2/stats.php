<?php
	require_once("action/StatsAction.php");

	$action = new StatsAction();
	$data = $action->execute();

	$pageTitle = "Statistiques";
	require_once("partial/header.php");
?>
<div id="page-stats">
	<ul>
		<li>
			Nombre de visites : <?= $data["nb_visites"] ?>
		</li>
		<li>
			Dernière visite : <?= $data["last_visit"] ?>
		</li>
		<li>
			Page la plus populaire : <?= $data["most_viewed"] ?>
		</li>
	</ul>
</div>
<?php
	require_once("partial/footer.php");