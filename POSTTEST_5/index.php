<?php
    require("koneksi.php");

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
    <title>Samarinda Vacation Spot</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        <?php
            include "css/style.css";
        ?>
    </style>
</head>
<body>
    
    <div class="container">
        <script>
            alert("Selamat Datang Di Samarinda Vacation Spot");
        </script>
    <!-- header -->
    <div id="home" class="header">
        <div class="name-web">
            <h1>Samarinda Vacation Spot</h1>
        </div>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="about.php">About</a>
            <a href="#konten">Content</a>
            <input type="checkbox" id="chek">
            <span class="mode">Darkmode</span>
        </div>
    </div>
    <!-- end header -->

    <!-- content -->
    <div id="konten" class="flex">
        <?php $i=1; foreach($lokasi as $lk): ?>
            <div class="content">
                <img src=<?php echo 'https://source.unsplash.com/1000x80'.$i.''?> alt='' class='gambar'>
                <!-- <img src="image/''.jpg" alt="Masjid Islamic Center" class="gambar"> -->
                
                <h2><?php echo $lk['nama']; ?></h2>
                
                <p><?php echo $lk['deskripsi']; ?><br>Harga Tiket Masuk : <?php echo $lk['tiket']?><br><?php echo $lk['alamat']?></p>
                <div class="btn">
                    <a href=<?php echo $lk['link']?>><i class="fa-solid fa-location-dot"></i> Lihat Lokasi Tempat Ini</a>
                </div>  
            </div>
        <?php $i++; endforeach;?>
    </div>
    <!-- end content -->


    <button class = "back"><a href="read.php">Manajemen Data</a></button>
    </div>
    <!-- footer -->
    <footer>
        <p>Copyright &copy; 2022 Samarinda Vacation Spot</p>
    </footer>   
    <!-- end footer -->
    <script src="js/main.js"></script>
</body>
</html>