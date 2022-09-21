<?php

namespace App;

class Connection {

    public static function getDb() {
        try {
            $conn = new \PDO(
                "mysql:host=127.0.0.1;dbname=mvc;charset=utf8",
                "root",
                ""
            );
            return $conn;
        } catch (\PDOException $erro) {
            TODO: //Implantar logica para o frame padrão
            //..tratar de alguma forma../
            echo $erro;
        }
    }
}



?>