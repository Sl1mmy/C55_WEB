<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Centre d'appels</title>
        <meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet" />
    </head>
    <body>
		<div class="stats shaded">
			<h1>Centre d'appels CVM</h1>
			<div>
				<?= $data["nbVisites"] ?> appels depuis sa création!
			</div>
		</div>
        <div class="control-panel">
			<div class="shaded">
			<form action="" method="post">

				<?php
					if (!$data["isConnected"]) {
						?>
							<button name="completed">Appel complété</button>
							<button name="disconnect">Se déconnecter</button>
						<?php
					}
					else {
						?>
							<button name="connect">Se connecter</button>
					<?php
					}
				?>

			</form>
			</div>
		</div>
    </body>
</html>