<?php

    namespace App;

    class Connection {
        public static function getDb () {
            try {
                
                $conn = new \PDO(
                    'mysql:host=HOSTNAME;dbname=DBNAME;charset=utf8',
                    "USERNAME",
                    "PASSWORD"
                );

                return $conn;

            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    }