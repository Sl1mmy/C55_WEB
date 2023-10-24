<?php
    require_once("action/DAO/Connection.php");
    class UserDAO {
        

        public static function getNumberOfCalls() {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT COUNT(*) as num FROM phone_calls");
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Juste pour les select, permet de retourner un dictionnaire ex : $row["username"] (sinon $row[0])
            $statement->execute();

            $calls = $statement->fetch();

            return $calls;
        }

        public static function addNewCall() {
            $minutes = rand(1, 10);
            
            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO phone_calls (minutes) VALUES ($minutes)");
            $statement->execute();
        }

    }