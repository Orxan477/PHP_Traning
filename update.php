<?php
if (isset($_POST['submitUpdate'])) {
    $nameFieldUpdate = $_POST["customUpdate"];
    $idFieldUpdate = $_POST["customIdUpdate"];

    echo "Your Name is: " . $nameFieldUpdate . " ";

    $con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
    if ($con->connect_error) {
        die("Connection failed: "
            . $con->connect_error);
    }
    // $sql="SELECT * FROM product where id=".'$idFieldUpdate'."";
    $result = mysqli_query($con, "SELECT * FROM product where product.id=$idFieldUpdate");
    $row = mysqli_fetch_array($result);
    echo ''. $row['Name'].'';
}
?>
</br>
</br>
<a href="index.php">Home</a>