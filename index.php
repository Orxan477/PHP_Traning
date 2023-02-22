<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
                            if ($con->connect_error) {
                                die("Connection failed: "
                                    . $con->connect_error);
                            }
                            $result = mysqli_query($con, "SELECT * FROM product");

                            while ($row = mysqli_fetch_array($result)) {
                                echo
                                    '
                                        <tr>
                                            <th scope="row" > ' . $row['Id'] . '</th>
                                            <td>' . $row['Name'] . '</td>
                                            <td class="d-none"><input type="hidden" class="d-none" name="searchUpdateProduct" value="' . $row['Id'] . '"></td>
                                            </form>
                                            <th>
                                                <a href="updatePage.php?id=' . $row['Id'] . '"  class="btn btn-warning">Link</a>
                                            </th>
                                            <th>
                                                <a href="delete.php?id=' . $row['Id'] . '" class="btn btn-danger">Link</a>
                                            </th>
                                        </tr>
                                   ';
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="postPage.php">POST</a>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>