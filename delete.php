<?php
if (isset($_POST['goDeletePage'])) {
    $deleteId = $_POST["searchDeleteProduct"];
}

$con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
if ($con->connect_error) {
    die("Connection failed: "
        . $con->connect_error);
}
$query = "DELETE FROM product WHERE product.Id = $deleteId";
$result = mysqli_query($con, $query);
echo 'Məlumat silindi!';
?>