<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/SpyDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            if(!empty($_SESSION["nbVisites"])) {
                $_SESSION["nbVisites"] += 1;
            } else {
                $_SESSION["nbVisites"] = 1;
            }
            
            $nbVisites = $_SESSION["nbVisites"];

            $searchResult = []; 

            if(!empty($_POST["searchBox"])) {
				$searchResult = SpyDAO::searchSpyList($_POST["searchBox"]);
			}


            return compact("nbVisites", "searchResult");
        }
    }