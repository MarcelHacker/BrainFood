<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $firstName;
    public $lastName;
    public $username;
    public $email;
    public $city;
    public $postCode;
    public $houseNumber;
    public $password;       //TODO Hash Password
    public $confirmPassword;
    public $birthdate;
    public $country;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read users
    public function read(){
 
        // select all query
        $query = "SELECT *
            FROM
                " . $this->table_name . " u
                ORDER BY
                    u.createdDate DESC";
 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
 
        // execute query
        $stmt->execute();
 
        return $stmt;
    }
}
?>