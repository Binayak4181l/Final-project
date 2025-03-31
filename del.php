<?php
include'start.php';
if($SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $email=$_POST['Email'];
    $age=$_POST['age'];
    $stmt =$conn->prepare("DELETE FROM std WHERE username =? AND email=? AND age=?");
    $stmt->bind_param("ssi",$username,$age,$email);
    if($stmt->execute()){
        header("Location: retrive.php");
        exit();
    }
    else{
        echo"error:".$stmt->error;
    }
    $stmt->close();
}
mysqli_close($conn);
?>