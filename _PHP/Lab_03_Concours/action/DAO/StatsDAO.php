<?php
    class StatsDAO {
        
        public static function save($name, $roomType) {
            $txt = "$name;$roomType;\n";
            $myfile = fopen("newfile.txt", "a") or die("cant open");
            fwrite($myfile, $txt);
            fclose($myfile);
        }

        public static function count() {
            $myfile = fopen("newfile.txt", "r");
            $num_lines = 0;
             
            while (!feof($myfile)) {
                $line = fgets($myfile);
                if($line != NULL) {
                    $num_lines++;
                }
            }
             
            fclose($myfile);
            return $num_lines;
        }

        public static function countPerRoomType() {
            $myfile = fopen("newfile.txt", "r");
            $num_lines_simple = 0;
            $num_lines_double = 0;
            $num_lines_suite = 0;
             
            while (!feof($myfile)) {
                $line = fgets($myfile);
                if(substr_count($line, "Simple") == 1) {
                    $num_lines_simple++;
                } elseif (substr_count($line, "Double") == 1) {
                    $num_lines_double++;
                } elseif (substr_count($line, "Suite") == 1) {
                    $num_lines_suite++;
                }
            }
            $num_lines = [
                "simple" => $num_lines_simple,
                "double" => $num_lines_double,
                "suite" => $num_lines_suite,
            ];

            fclose($myfile);
            return $num_lines;
        }
    }
?>