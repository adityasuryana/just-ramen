<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-beta.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <?php
        require_once('../../config.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM menu WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

    ?>

    <div class="container">
        <div class="card bg-white mt-4 w-75  position-absolute top-50 start-50 translate-middle" id="form-body">
            <div class="card-header bg-white">Update Menu</div>
            <div class="card-body">
                <form method="post" action="update_data.php" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    <div class="form-group">
                        <label>Menu</label>
                        <input type="text" value="<?php echo $row['menu']; ?>" class="form-control" name="menu" placeholder="Enter Menu">
                    </div>
                    <div class="form-group mt-2">
                        <label>Price</label>
                        <input type="number" value="<?php echo $row['harga']; ?>" class="form-control" name="harga" placeholder="Enter Price">
                    </div>
                    <div class="form-group mt-2">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="deskripsi" placeholder="Enter Description"><?php echo $row['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" value="<?php echo $row['img_menu']; ?>" class="form-control" name="img_menu">
                    </div>
                    <button type="submit" class="btn btn-edit mt-4" id="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
