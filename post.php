<?php
if (isset($_POST['submitPost'])) {
    $nameField = $_POST["custom"];

    // echo "Your Name is: " . $nameField . "                  ";

    $con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
    if ($con->connect_error) {
        die("Connection failed: "
            . $con->connect_error);
    }
    $sqlquery = "INSERT INTO product(Name) VALUES ('$nameField')";
    if (mysqli_query($con, $sqlquery)) {
        echo "Məlumatlar bazya əlavə olundu";
    } else {
        echo "Error: " . $sqlquery . ":-" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
</br>
</br>
<a href="index.php">Home</a>