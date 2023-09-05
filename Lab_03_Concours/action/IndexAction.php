<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if(isset($_POST["name"]) && isset($_POST["type"])) {
                if($_SESSION["visibility"] == CommonAction::$VISIBILITY_PUBLIC) {
                    StatsDAO::save($_POST["name"], $_POST["type"]);
                    $_SESSION["visibility"] = CommonAction::$VISIBILITY_MEMBER;
                }
                

            }

                

        
            return [];
        }
    }