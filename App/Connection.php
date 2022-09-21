<?php

namespace App;

class Connection {

    public function getDB() {
        try {
            $conn = new PDO(
                "mysql:host=localhost;
                dbname=mvc;
                charset=utf8",
            );
            return $conn;
        } catch (PDOException $erro) {
            //..tratar de alguma forma../
        }
    }
}



?>