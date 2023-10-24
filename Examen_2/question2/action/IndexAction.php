<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/UserDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $isConnected = false;
            $nbCalls = 0;
            $nbVisites = 0;

            if(empty($_SESSION["isConnected"])) {
                $_SESSION["isConnected"] = false;
            }


            if($_SESSION["isConnected"]) { //inverser when button clicked, forgot how to know what button was clicked
                $isConnected = false;
            } else {
                $isConnected = true;
            }
            $_SESSION["isConnected"] = $isConnected;


            if($_SESSION["isConnected"] && true) { // && buttonclicked = Appel complété
                UserDAO::addNewCall();
            }

            $nbVisites = UserDAO::getNumberOfCalls(); //array to String, dont know how to 

            return compact("isConnected", "nbVisites");
        }
    }