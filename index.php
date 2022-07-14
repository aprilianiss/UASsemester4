<?php 
include "php/init.php";
conn();

// jika user sudah login redirect ke dashboard
if( isset($_SESSION['username']) ){
    header("Location: dashboard.php");
}

// get all buku
$buku = getAllBuku();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN ONLINE (Tugas Besar Semester 4)</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Google Materalize fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

    <header>
            <nav class="salmon">
                <a href="index.php" class="brand-logo left"><i class="material-icons left">home</i> PERPUSTAKAAN ONLINE </a>
                <ul class="right">
                    <li class="active"> <a href="login.php"> Login </a>
                </ul>
            </nav>
        </header>

        <!-- content -->
        <div class="content">
            <div class="items">
                <?php foreach ( $buku as $row ) :  ?>
                    <a href="detail.php?id=<?= $row['id'] ?>" class="card">
                        <!-- image -->
                        
                        <div class="card-header">
                            <h5><?= $row['nama'] ?></h5>
                        </div>
                        <div class="card-body">
                            <!-- detail -->
                            
                            <!-- description -->
                            <div class="description">
                                <div class="detail">
                                    <table>
                                        <tr>
                                            <th>Pengarang</th>
                                            <td>: <?= $row['pengarang'] ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Terbit</th>
                                            <td>: <?= $row['tahun_terbit'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <hr>
                                <div><?= $row['deskripsi'] ?></div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>    
            </div>
        </div>

    </div>

    

    <script src="js/app.js"></script>
</body>
</html>