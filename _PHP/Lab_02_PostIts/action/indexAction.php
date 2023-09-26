<?php
    session_start();

    function execute() {      
        // 1- Si le tableau de post-its n'existe pas en session, le créer
        
        if(empty($_SESSION["list"])) {
            $_SESSION["list"] = [];
        }
        // 2- S'il y a des données de formulaire, alors
    
        if(!empty($_POST["text"]) && !empty($_POST["x"]) && !empty($_POST["y"])) {
            
            // 2.1- Créer un tableau de 3 éléments (pour le texte, le x et le y spécifiés dans le formulaire)
            $postit = [$_POST["text"], $_POST["x"], $_POST["y"]];

            // 2.2- Ajouter ce tableau dans le tableau de post-its (voir étape 1)
            $_SESSION["list"][] = $postit;
        }
    
        $list = $_SESSION["list"];
        return compact("list");
    }

?>