<?php
include 'start.php';
$sql = "CREATE TABLE IF NOT EXISTS std (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(100),
    Email VARCHAR(100),
    Age INT,
    UNIQUE (Email)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>