<?php


$db_host="127.0.0.1";
$db_user= "root";
$db_pss="";
$db_port="3307";
$db_name="test";



$conn = mysqli_connect($db_host,$db_user,$db_pss,$db_name,$db_port);

if(!$conn)
{
  echo "connection failed : ". mysqli_connect_error();
  exit();
}

$us = $_POST['email'];
$ps = $_POST['password'];



$sql="select * from users where email='$us' and password = '$ps'";
$result = mysqli_query($conn, $sql);

if(!$result)
{
  echo "not found". mysqli_error($conn);
  exit();
}


$row = mysqli_fetch_assoc($result);

if($row){
  echo "hello " . $row['phone']."<br>";

  setcookie("email",$row['email'],time()+3600);
  setcookie("phn",$row['phone'],time()+3600);

?>
<a href="dashboard.php">Click here</a>
<?php
}
else{
  echo"login failed!";
}





?>