<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// créér la connexions
$conn = new mysqli($servername, $username , $password, $dbname);

//vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}