
<?php
   
   session_start();

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


   $email = $_POST['email'];
   $password = $_POST['password'];
   $phn = $_POST['phn'];

   // Prepared statement to avoid SQL injection
   $stmt = $conn->prepare("INSERT INTO users (email, password, phone) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $email, $password, $phn); // "sss" denotes 3 string inputs

   if ($stmt->execute()) {
      echo "Registration Successful";
   } else {
      echo "Error: " . $stmt->error;
   }

   // Close connection
   $stmt->close();
   mysqli_close($conn);
?>