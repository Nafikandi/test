<?php

    $kon = mysqli_connect('localhost','root','','test-penugasan');
    if(!$kon){
        echo 'Database tidak ada'. mysqli_connect_errno();
    }



?>