<!DOCTYPE html>
<html lang="en">

<body>
    
    <div class="container">
        <a href="tambah.php" class="btn btn-success btn-sm">Tambah</a>
        <a href="print.php" onclick="print()" class="btn btn-success btn-sm">Print
            <script>
                function print(){
                    window.open("print.php");
                }
            </script>


        </a>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nopol</th>
                <th>Merek</th>
                <th>Transmisi</th>
                <th>Tahun</th>
                <th>Aksi</th>
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
                <td>
                    <a href="edit.php?id=<?=$data['nopol']?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="hapus.php?id=<?=$data['nopol']?>" onclick="return confirm('Hapus Data')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            
            <?php }
            ?>
        </tbody>
        </table>
    </div>

</body>
</html>