<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "CreatorSummit";

$conn = mysqli_connect($server, $username, $password, $database);


if ($conn) {
    echo "Connected to database";
}
if (!$conn) {
    die("Error". mysqli_connect_error());
}
// else {
//     die("Error". mysqli_connect_error());
// }