<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "products";
 
    // object properties
    public $id;             // Produkt ID
    public $name;           // Produktname
    public $description;    // Beschreibung bzw. Menge
    public $price;          // Preis bezogen auf die Menge
    public $category_id;    // Kategorienummer des Produkts
    public $category_name;  // Kategoriename
    public $created;        // Erstelldatum
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    public function read(){
 
        // select all query
        $query = "SELECT c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
                ORDER BY
                    p.created DESC";
 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
 
        // execute query
        $stmt->execute();
 
        return $stmt;
    }
}
?>