<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-beta.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <?php
        require_once('../../config.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM stok WHERE id='$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="card bg-white mt-4 w-75  position-absolute top-50 start-50 translate-middle" id="form-body">
            <div class="card-header bg-white">Update Stock</div>
            <div class="card-body">
                <form method="post" action="update_data.php">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    <div class="form-group">
                        <label>Material</label>
                        <input type="text" value="<?php echo $row['nama_bahan']; ?>" class="form-control" name="nama_bahan" placeholder="Enter Menu">
                    </div>
                    <div class="form-group mt-2">
                        <label>Total</label>
                        <input type="number" value="<?php echo $row['jumlah']; ?>" class="form-control" name="jumlah" placeholder="Enter Price">
                    </div>
                    <div class="form-group mt-2">
                        <label>Description</label>
                        <input type="text" value="<?php echo $row['deskripsi']; ?>" class="form-control" name="deskripsi" placeholder="Enter Description">
                    </div>
                    <button type="submit" class="btn btn-edit mt-4" id="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
