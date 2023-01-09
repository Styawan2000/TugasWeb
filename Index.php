<?php
require 'set.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Komponen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class = container >
        <div class = " alert alert-info text-center ">Blog</div>

        <a href="add.php" class="btn btn-primary ">Tambah Data</a>

        <br> <br>

        <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Id Blog</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $query = mysqli_query($connect, "SELECT * FROM  Blog");
                    while ($isi = mysqli_fetch_object($query)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $isi-> author; ?></td>
                        <td><?= $isi-> category; ?></td>
                        <td><?= $isi-> content; ?></td>
                        <td>
                            <a onclick = "return confirm('Are You Sure ? to deleted')" 
                                href="deleted.php?code=<?php echo $isi->id_blog; ?>"  
                                class="btn btn-danger btn-sm">Del </a>

                            <a  href="edit.php?code=<?php echo $isi->id_blog; ?>"  
                                class="btn btn-warning btn-sm">Edit </a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>