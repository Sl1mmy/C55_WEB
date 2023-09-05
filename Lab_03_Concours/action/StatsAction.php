<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $total_rooms = StatsDAO::count();
            $sum_rooms = StatsDAO::countPerRoomType();

            $nb_simple = $sum_rooms["simple"];
            $nb_double = $sum_rooms["double"];
            $nb_suite = $sum_rooms["suite"];

            return compact("total_rooms", "nb_simple", "nb_double", "nb_suite");
        }
    }