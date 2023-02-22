<?php 
$con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
if ($con->connect_error) {
    die("Connection failed: "
    . $con->connect_error);
}

// $con->set_charset('utf-8');
?>