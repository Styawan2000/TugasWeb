<?php
require 'set.php';

if (isset($_GET['code'])) {

    $code = $_GET['code'];

    $query = mysqli_query($connect, "SELECT * FROM Blog WHERE id_blog='$code'");

    $isi = mysqli_fetch_object($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="alert alert-warning text-center h3">Edit Data</div>

        <div class="row ">

    <center> <div class="col-md-4 ">

                <div class="card card-body text-bg-info p-3 text-center">

                <?php

                if (isset($_POST['simpan'])){
                    
                    $id_blog = $_POST['txtid_blog'];
                    $author = $_POST['txtauthor'];
                    $category = $_POST['txtcategory'];
                    $content = $_POST['txtcontent'];

                    $query = mysqli_query($connect,"UPDATE Blog set author='$author', category='$category', content='$content' WHERE id_blog='$id_blog'");

                    if ($query) {
                        header('location: index.php');
                    } else {
                        echo 'Error => ' . mysqli_error($connect);
                    }

                }


                ?>

                    <form action="edit.php" method="post">
                        <div class="mb-3">
                            <label for="" >Author</label>
                            <input type="hidden" name="txtid_blog" value="<?php echo $isi->id_blog ?>">
                            <input type="text" name="txtauthor" class="form-control text-center" value="<?php echo $isi->author ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <input type="text" name="txtcategory" class="form-control text-center" value="<?php echo $isi->category ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Content</label>
                            <input type="text" name="txtcontent" class="form-control text-center" value="<?php echo $isi->content ?>">
                        </div>

                        <input type="submit" name="simpan" value="Update" class="btn btn-primary">
                        <a href="index.php" class="btn btn-warning">Back </a>
                    </form>

                </div>

            </div> <center>

        </div>

    </div>
</body>

</html>