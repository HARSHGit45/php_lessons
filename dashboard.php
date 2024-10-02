<?php

session_start();


$ml = $_SESSION['email'];
$phn = $_SESSION['phn'];


echo "hello" . $ml . " having phone no " . $phn ."";




?>