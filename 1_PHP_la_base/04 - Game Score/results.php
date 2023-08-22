<?php
    require_once("action/resultsAction.php");

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
            <div class="results-container">
                <h1>
                    Résultats
                </h1>
                
                <div>2020-12-12 8:23:13 - 8.354 secondes</div>
                <div>2020-12-11 12:43:44 -  7.123 secondes</div>
                <div>2020-12-11 11:20:47 - 5.123 secondes</div>
                <div>2020-12-11 11:18:01 - 7.13 secondes</div>
                <div>2020-12-11 10:20:36 - 10.984 secondes</div>
            </div>
        </div>


<?php
    require_once("partial/footer.php");
?>