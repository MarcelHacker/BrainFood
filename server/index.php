<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "brainfooddb"; 
$id = '';

$con = mysqli_connect($host, $user, $password, $dbname);

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);


if (!$con) // Bei Verbindungsfehler
{
  die("Connection failed: " . mysqli_connect_error());
}


switch ($method)
{
    case 'GET':   // Data request
      $id = $_GET['id'];  // id
      $sql = "select * from users".($id?" where id=$id":''); 
      break;
    case 'POST':  // Data insert
      $firstname = $_POST["name"];
      $lastname = $_POST["lastname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $city = $_POST["city"];
      $street = $_POST["street"];
      $postcode = $_POST["postCode"];
      $housenumber = $_POST["houseNumber"];
      $password = $_POST["password"];
      $confirmpassword = $_POST["confirmPassword"];
      $birthdate = $_POST["birthdate"];
      $country = $_POST["country"];

      $sql = "INSERT INTO users (firstName, lastName, username, email, city, postCode, houseNumber, password, confirmPassword, birthdate, , country) 
               values 
               ('$firstname', '$lastname', '$username', '$email', '$city', '$postcode', '$housenumber', '$password', '$confirmpassword', '$birthdate', '$country')";
      break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) 
{
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
      echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($result);
  } else {
    echo mysqli_affected_rows($con);
  }

$con->close();
?>