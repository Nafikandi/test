<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Test CRUD</title>
</head>
<body onload='script:window.print()'>
    
    <div class="container">
   
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nopol</th>
                <th>Merek</th>
                <th>Transmisi</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
        <?php
                
                require 'koneksi.php';
                $no = 1;
                $sql = mysqli_query($kon,"SELECT * FROM tbl_pol");
                while($data = mysqli_fetch_array($sql)){
                    ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$data['nopol']?></td>
                <td><?=$data['mrek']?></td>
                <td><?=$data['transmisi']?></td>
                <td><?=$data['tahun']?></td>
                
            </tr>
            
            <?php }
            ?>
        </tbody>
        </table>
    </div>

</body>
</html>