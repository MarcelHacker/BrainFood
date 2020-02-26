<?php
class Database {
    
    private $db_host = 'localhost';
    private $db_name = 'brainfooddb';
    private $db_username = 'rosinger';
    private $db_password = 'wien1080';
    
    public function dbConnection(){     //Database connection
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
    }
}
?>