
<!-- Dela Cruz, jhonrick P. 
 BSiT 2 Y1 5
 WEBDEV ACT 1 Finals
-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CompanyDB";

//create connection

$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection
if ($conn -> connect_error){
    die("connection failed". $conn -> connect_error);
}else{
    echo "Sucessful";
}





?>