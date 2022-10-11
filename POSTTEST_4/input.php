<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'css/input.css'
        ?>
    </style>
    <title>Samarinda Vacation Spot</title>
</head>
<body>
    <div class="container">
        <div class="title">
            Tambah Data
        </div>
        <form action="" method="post" name="form1">
        <div class="form">
            <div class="input_field">
                <label for="">Nama Lokasi Wisata</label>
                <input type="text" name="nama" class="input">
            </div>
            <div class="input_field">
                <label for="">Harga Tiket Masuk</label>
                <div class="custom_select">
                <select name="harga" id="">
                    <option value="Gratis">Gratis</option>
                    <option value="Rp.15.000">Rp.15.000</option>
                    <option value="Rp.20.000">Rp.20.000</option>
                    <option value="Rp.30.000">Rp.30.000</option>
                    <option value="Rp.40.000">Rp.40.000</option>
                    <option value="Rp.50.000">Rp.50.000</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Alamat Wisata</label>
                <input type="text" name = "alamat" class="input">
            </div>
            <div class="input_field">
                <label for="">Deskripsi Tempat Wisata</label>
                <input type="text" name="desc" class="desc">
            </div>
            <div class="input_field">
                <label for="">Link Google Maps</label>
                <input type="text" name ="link" class="input">
            </div>
            <div class="inputfield">
                <button type="submit" name="submit" value="submit">Tambah</button>
            </div>
        </div>
        </form>
    </div>
</body>
<?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $alamat=$_POST['alamat'];
    $desk = $_POST['desc'];
    $link=$_POST['link'];
?>
    <table class="table" border="1" cellpadding="5">
        <tr>
            <td>Nama Tempat</td>
            <td>Harga Tiket</td>
            <td>Alamat</td>
            <td>Deskripsi</td>
            <td>Link</td>
        </tr>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $harga; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $desk; ?></td>
            <td><?php echo $link; ?></td>
        </tr>
    </table>
<?php
}
?>

</html>