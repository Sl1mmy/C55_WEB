<?php
    require_once("action/indexAction.php");

    $data = execute();

    require_once("partial/header.php");
?>

    <body>
        <header>
            <div class="logo">
                <img src="images/logo.png" alt="Logo" height="50">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Jeu</a></li>
                    <li><a href="results.php">Résultats</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="game-container">
                <canvas width="960" height="576"></canvas>

                <div class="save-form-section">
                    <form action="" method="post">
                        <button>Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>

<?php
        require_once("partial/footer.php");
?>