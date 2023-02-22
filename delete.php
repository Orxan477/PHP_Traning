<?php
$deletePro=$_GET['id'];
// echo $deletePro;

$con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
if ($con->connect_error) {
    die("Connection failed: "
        . $con->connect_error);
}
$query = "DELETE FROM product WHERE product.Id = $deletePro";
$result = mysqli_query($con, $query);
echo 'Məlumat silindi!';
?>

</br>
</br>
<a href="index.php">Home</a>