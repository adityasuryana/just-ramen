<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php
        require_once('../../config.php');
        $id_promo = $_GET['id_promo'];
        $query = "SELECT * FROM promo WHERE id_promo = '$id_promo'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="card mt-4" id="form-body">
            <div class="card-header">
                Update Promo
            </div>
            <div class="card-body">
                <form method="post" action="update_data.php" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $row['id_promo']; ?>" name="id_promo">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" value="<?php echo $row['title_promo']; ?>" class="form-control" name="title_promo">
                    </div>
                    <div class="form-group mt-2">
                      <label for="desc" class="form-label">Description</label>
  								    <textarea type="text" class="form-control" name="desc_promo" id="desc"><?php echo $row['desc_promo']; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" value="<?php echo $row['img_promo']; ?>" class="form-control" name="img_promo">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
