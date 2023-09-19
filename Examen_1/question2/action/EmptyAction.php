<?php
    require_once("action/CommonAction.php");

    class EmptyAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
        }

        protected function executeAction() {
            
            TrafficDAO::emptyTrafficText();
            header("location:admin-index.php");
            return [];
        }
    }