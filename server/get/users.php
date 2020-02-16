<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/users.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$users = new Users($db);
 
// read products will be here
// query products
$stmt = $users->read();
 
// check if more than 0 record found
if($num>0){
    // products array
    $users_arr=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $user_item=array(
            "id" => $id,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "username" => $username,
            "email" => $email,
            "city" => $city,
            "postCode" => $postCode,
            "houseNumber" => $houseNumber,
            "password" => $password,
            "confirmPassword" => $confirmPassword,
            "birthdate" => $birthdate,
            "country" => $country,
        );
 
        echo $users_arr;
        array_push($users_arr, $user_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($users_arr);
}
// no products found will be here
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>