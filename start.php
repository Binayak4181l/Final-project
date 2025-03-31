<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'FORM';
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn) {
    die("Connection error: " . mysqli_connect_error());  
} else {
    echo "Connection successful"; 
}
mysqli_close($conn);
?>
