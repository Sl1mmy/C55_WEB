<?php

    class TrafficDAO {

        public static function count() {
            $data = file_get_contents("data/traffic.txt");
            $lines = explode("\n", $data);
            $count = 0;

            foreach ($lines as $line) {
                if (!empty($line)) {
                    $count++;
                }
            }
            return $count;
        }

        public static function last_visit() {
            $data = file_get_contents("data/traffic.txt");
            $lines = explode("\n", $data);
            $last_date = 0;

            foreach ($lines as $line) {
                if (!empty($line)) {
                    $cols = explode(",", $line);
                    $last_date = trim($cols[1]);
                }
            }

            return $last_date;
        }

        public static function most_viewed() {
            $data = file_get_contents("data/traffic.txt");
            $lines = explode("\n", $data);
            $results = [];
            $results["stats"] = 0;
            $results["admin"] = 0;
            $results["contact"] = 0;
            $results["acceuil"] = 0;
            $results["images"] = 0;

            $most_viewed = 0;
            $most_viewed_name = "";

            

            foreach ($lines as $line) {
                if (!empty($line)) {
                    $cols = explode(",", $line);
                    $pageName = trim($cols[0]);
                    $results[$pageName]++;

                    if($results[$pageName] > $most_viewed) {
                        $most_viewed = $results[$pageName];
                        $most_viewed_name = $pageName;
                    }
                }
            }
            
            return $most_viewed_name;
        }

        public static function setTrafficText($pageName) {
            $date = date("Y-m-d h:i:s");

            $text = "$pageName, $date, ";
            file_put_contents("data/traffic.txt", $pageName . ", " . $date . ", \n", FILE_APPEND);
        }

        public static function emptyTrafficText() {
            file_put_contents("data/traffic.txt", "");
        }

    }