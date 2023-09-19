<?php
    require_once("action/CommonAction.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            TrafficDAO::setTrafficText("stats");

            $nb_visites = TrafficDAO::count();
            $last_visit = TrafficDAO::last_visit();
            $most_viewed = TrafficDAO::most_viewed();

            return compact("nb_visites", "last_visit", "most_viewed");
        }
    }