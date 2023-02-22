<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <form method="post" action="update.php">

                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'test') or die('Unable');
                        if ($con->connect_error) {
                            die("Connection failed: "
                            . $con->connect_error);
                        }
                        $updatePro=$_GET['id'];
                        $result = mysqli_query($con, "SELECT * FROM product where id=$updatePro");
                        $row = mysqli_fetch_assoc($result);
                            echo ' 
                              <form method="post" action="update.php">
                              <div class="form-group">
                               <label for="exampleInputEmail1">Name</label>
                               <input type="hidden" class="form-control" name="customIdUpdate" value="' . $row['Id'] . '">
                               <input type="text" class="form-control" name="customUpdate" value="' . $row['Name'] . '">
                               </div>
                           <button type="submit" name="submitUpdate" class="btn btn-primary">Submit</button>
                            </form>';
                        
                        
                        ?>
                    </form>

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