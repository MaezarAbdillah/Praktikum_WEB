<?php
    require("koneksi.php");

    mysqli_query($conn, "SELECT * FROM lokasi");
    

    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $harga=$_POST['harga'];
        $alamat=$_POST['alamat'];
        $desk = $_POST['desc'];
        $link=$_POST['link'];
        
        $insert = "INSERT INTO lokasi VALUES('', '$nama', '$harga', '$alamat', '$link', '$desk')";

        $tambah = mysqli_query($conn,$insert);

    }

    $read = mysqli_query($conn,"SELECT * FROM lokasi");

    $lokasi = [];
    while ($row = mysqli_fetch_assoc($read)){
        $lokasi[] = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'css/input.css';
            include 'css/style.css';
        ?>
    </style>
    <title>Samarinda Vacation Spot</title>
</head>
<body>
    <h1><center>Tabel Data</center></h1><br>
<table class="table" border="1" cellpadding="5">
        <tr>
            <td>Nama Tempat</td>
            <td>Harga Tiket</td>
            <td>Alamat</td>
            <td>Link</td>
            <td>Deskripsi</td>
            <td></td>
        </tr>
        <?php foreach($lokasi as $lk):?>
        <tr>
            
            <td><?php echo $lk['nama']; ?></td>
            <td><?php echo $lk['tiket']; ?></td>
            <td><?php echo $lk['alamat']; ?></td>
            <td><?php echo $lk['link']; ?></td>
            <td><?php echo $lk['deskripsi']; ?></td>
            <td>
                <button type = "submit"><a href="edit.php?id=<?php echo $lk['id']; ?>">Edit Data</a></button>
                <button type = "submit"><a href="delete.php?id=<?php echo $lk['id']; ?>">Hapus Data</a></button>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
    
    
    
</html>