<?php

session_start();


$db_host = "127.0.0.1";
$db_user="root";
$db_pass= "";
$db_name= "test";
$db_port="3307";


$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);


$fn = $_POST['fname'];
$ln = $_POST['lname'];
$psss = $_POST['password'];



$stmt = $conn->prepare("INSERT INTO usr (fname, lname, password) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $fn, $ln, $psss); // "sss" denotes 3 string inputs

if($stmt->execute()==true){





echo "Successfully Registered";

}

else{
  echo "failed!!";
}


mysqli_close($conn);




?>