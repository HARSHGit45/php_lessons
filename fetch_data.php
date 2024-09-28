<?php
   

   $db_host = "127.0.0.1"; // or 'localhost'
   $db_usn = "root";
   $db_pss = "";
   $db_name = "test";
   $db_port = "3307"; // Specify the custom port number

   // Create connection
   $conn = mysqli_connect($db_host, $db_usn, $db_pss, $db_name, $db_port);

   if (!$conn)
   {
    echo mysqli_connect_error();
    exit();
   }


   $sql = "select * from users";

   $res  =  mysqli_query($conn,$sql);

   while($row = mysqli_fetch_assoc($res)){
    echo $row['email']."<br>";
   }
   mysqli_close($conn);
   
   
   
   ?>