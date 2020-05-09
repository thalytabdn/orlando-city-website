<?php 

class Sql {

    public $conn;

    public function __construct(){

        $this->conn = mysqli_connect("127.0.0.1","thalyta","","my_db")

    }

    public function __destruct(){

    }
}

    

?>