<?php
include 'start.php';

$id =(int)$_POST['ID'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$age = (int)$_POST['Age'];

$sql = "INSERT INTO std (ID, Username, Email, Age) VALUES ($id, '$username', '$email', $age)";

if (mysqli_query($conn, $sql)) {
    echo "Data has been inserted";
} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);
?>