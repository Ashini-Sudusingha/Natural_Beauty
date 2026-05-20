<?php

class Database{

public static $connection;

public static function setupConnection(){

    if(!isset(Database::$connection)){

       if(file_exists(__DIR__ . "/config.php")){
           require_once __DIR__ . "/config.php";
       } else {
           require_once __DIR__ . "/config.example.php";
       }

       Database::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    }
}

public static function iud($q){
   Database::setUpConnection();
   Database::$connection->query($q);
}

public static function search($q){
   Database::setUpConnection();
   $resultset = Database::$connection->query($q);
   return $resultset;
}

}
 ?>