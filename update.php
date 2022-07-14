<?php
include "php/init.php";
conn();

// ambil buku dengan id
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    $hasil = get($id);
}else {
    header("Location: dashboard.php");
}

// jika tombol ubah di klik
if (isset($_POST['ubahBuku']) ){
    ubahBuku($id, $_POST['nama'], $_POST['deskripsi'], $_POST['pengarang'], $_POST['tahun'] );
    header("Location: dashboard.php");

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        .wrp {
            width: widht: 50vw;
            padding-left: 90px;
        }
    </style>
</head>
<body>

    <div class="wrp">
        <form method="post">
            <div class="wrp">
                <!-- nama -->
                <div class="input-group">
                    <label for="nama">Nama Buku</label>
                    <input type="text" name="nama" id="nama" value="<?= $hasil['nama'];?>">
                </div>

                <!--deskripsi-->
                    <div class="input-group">
                    <label for="nama">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" value="<?= $hasil['deskripsi'];?>">
                </div>

                <!--pengarang-->
                <div class="input-group">
                    <label for="nama">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" value="<?= $hasil['pengarang'];?>">
                </div>
                
                <!--tahun terbit-->
                <div class="input-group">
                    <label for="nama">Tahun Terbit</label>
                    <input type="date" name="tahun" id=tahun value="<?= $hasil['tahun_terbit'];?>">
                </div>

                <!--tombol tambah-->
                <div class="input-group">
                    <button name="ubahBuku" class="btn btn-success">Ubah</button>
                </div>
            </div>
            
        </form>
    </div>

</body>
</html>