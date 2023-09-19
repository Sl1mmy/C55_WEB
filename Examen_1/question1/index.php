<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Spy Lookup Service</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<form action="" method="post">
				<div class="search-line">

					<div class="form-left">
						<input type="text" name="searchBox" value="" />
					</div>
					<div class="form-right">
						<input type="image" src="images/search-btn.png" />
					</div>
					<div class="clear"></div>

						<?php
							foreach ($data["searchResult"] as $spy) {
								?>
									<li>
										<?=$spy?>
									</li>
								<?php
							}
						?>
						
				</div>
			</form>
		</div>
		<footer>
			Nombre de visites : <?= $data["nbVisites"] ?>
		</footer>
	</body>
</html>