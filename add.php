<?php
require 'set.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="alert alert-warning text-center h3 ">Tambah Data</div>

        <div class="row ">

    <center> <div class="col-md-4 ">

                <div class="card card-body text-bg-info p-3 text-center">

                <?php

                if (isset($_POST['simpan'])){
                    
                    $author = $_POST['txtauthor'];
                    $category = $_POST['txtcategory'];
                    $content = $_POST['txtcontent'];

                    $query = mysqli_query($connect,"INSERT INTO Blog values (NULL, '$author', '$category', '$content')");

                    if ($query) {
                        header('location: Index.php');
                    } else {
                        echo 'Error => ' . mysqli_error($connect);
                    }

                }


                ?>

                    <form action="add.php" method="post">
                        <div class="mb-3">
                            <label for="">Author</label>
                            <input type="text" name="txtauthor" class="form-control text-center">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <input type="text" name="txtcategory" class="form-control text-center">
                        </div>
                        <div class="mb-3">
                            <label for="">Content</label>
                            <input type="text" name="txtcontent" class="form-control text-center">
                        </div>

                        <input type="submit" name="simpan" value="Save" class="btn btn-primary">
                        <a href="index.php" class="btn btn-warning">Back </a>
                    </form>

                </div>

            </div> <center>

        </div>

    </div>
</body>

</html>