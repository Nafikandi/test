<?php
    require "koneksi.php";

    $id = $_GET['id'];

    $edit = mysqli_query($kon,"SELECT * FROM tbl_pol where nopol='$id'");
    $data =mysqli_fetch_array($edit);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Test CRUD</title>
</head>
<body>

    <div class="container">
        <form action="" method="post">

        <div class="form-group">
            <label for="">Nomor Polisi</label>
            <input type="text" name="nopol" value="<?=$data['nopol']?>">
        </div>

        <div class="form-group">
            <label for="">MEREK</label>
            <input type="text" name="merek" value="<?=$data['mrek']?>">
        </div>
        <div class="form-group">
            <label for="">Transmisi</label>
            <input type="text" name="trasmisi" value="<?=$data['transmisi']?>">
        </div>
        <div class="form-group">
            <label for="">Tahun</label>
            <input type="text" name="tahun" value="<?=$data['tahun']?>">
        </div>

        <div class="btn-aksi">
            <input type="submit" name="submit" value="EDIT">
        </div>

        </form>
    </div>


</body>
</thead>

<?php

    require 'koneksi.php';

    if(@$_POST['submit']){
        $nopol = $_POST['nopol'];
        $merek = $_POST['merek'];
        $trasmisi = $_POST['trasmisi'];
        $tahun = $_POST['tahun'];

       $dit = mysqli_query($kon,"UPDATE tbl_pol SET nopol='$nopol',
       mrek='$merek',transmisi='$trasmisi',tahun='$tahun'
       WHERE nopol='$nopol'
       ");
        
        if($dit == true){
            echo'<script>alert("DATA bERHASIL DIEDIT"); document.location="index.php";</script>';
        }
    }

?>