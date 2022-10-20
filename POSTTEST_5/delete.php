<?php
    require 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM lokasi WHERE id = $id");

    if($result){
        echo 
        "<script>
            alert('Data Telah DiHapus');
            document.location.href = 'read.php';
        </script>";
    }
    else{
        "<script>
            alert('Data Gagal DiHapus');
            document.location.href = 'edit.php';
        </script>";
    }
?>