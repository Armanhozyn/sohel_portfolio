<?php

    class Database{
        private $host = HOST;
        private $user = USER;
        private $password = PASSWORD;
        private $database = DB;

        public $link;

        public function __construct()
        {
            $this->connectDB();
        }

        private function connectDB(){
            $this->link = new mysqli($this->host,$this->user,$this->password,$this->database);
            if($this->link->connect_errno > 0){
                echo "Something went wrong".$this->link->connect_error;
                die();
            }
        }

    }

    $db = new Database();

    $result = $db->link->query("select * from general");
    $result = $result->fetch_assoc();

    var_dump($result);




?>
