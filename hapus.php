<?php
    require "koneksi.php";

    $id  = $_GET['id'];


    $delete = mysqli_query($kon,"DELETE FROM tbl_pol WHERE nopol='$id'");

       if($delete == true){
            echo'<script>alert("DATA bERHASIL Dihapus"); document.location="index.php";</script>';
        }

?>