<?php
include_once "connect.php";
$deletePro=$_GET['id'];
// echo $deletePro;

$query = "DELETE FROM product WHERE product.Id = $deletePro";
$result = mysqli_query($con, $query);
echo 'Məlumat silindi!';
?>

</br>
</br>
<a href="index.php">Home</a>