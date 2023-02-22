<?php
 
if (isset($_POST['submitUpdate'])) {
    $nameFieldUpdate = $_POST["customUpdate"];
    $idFieldUpdate = $_POST["customIdUpdate"];

    // echo "Your Name is: " . $nameFieldUpdate . " ";

    $con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
    if ($con->connect_error) {
        die("Connection failed: "
            . $con->connect_error);
    }
    $updateQueryProduct ="UPDATE product SET Name = '$nameFieldUpdate' WHERE Id = '$idFieldUpdate'";
    $result = mysqli_query($con, $updateQueryProduct);
    echo 'Məlumat dəyişdirildi';
}
?>
</br>
</br>
<a href="index.php">Home</a>