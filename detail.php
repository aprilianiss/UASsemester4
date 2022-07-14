<?php  
include "php/init.php";
conn();

if ( isset($_GET['id']) ) {
	$id = $_GET['id'];
	$buku = get($id);

}else {
	header("Location: index.php");
}

// logika pinjam
if ( isset($_POST['pinjam']) ) {
	$date = date("Y-m-d");
	query("
		INSERT INTO `pinjam` (`id`, `buku_id`, `created_at`) VALUES (NULL, '$id', '$date');
		");

	$nama = $buku['nama'];

	echo '
		<script type="text/javascript">
			alert("buku ' . $nama . ' Berhasil di Pinjam ! ");
			window.location.href = "index.php";
		</script>
	';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN ONLINE (Tugas Besar Semster 4)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="wrp">
		<!-- header -->
        <div class="header">
            <div class="h-content">
                <div class="title">
                    <h1>RuangRiung</h1>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

		<div class="content">
			<div class="card">
				<div class="card-body">

					<h1><?= $buku['nama'] ?></h1>
					<p><?= $buku['deskripsi'] ?></p>

					<hr>

					<table>
						<tr>
							<th>Pengarang</th>
							<td>: <?= $buku['pengarang'] ?></td>
						</tr>
						<tr>
							<th>Tahun Terbit</th>
							<td>: <?= $buku	['tahun_terbit'] ?></td>
						</tr>
					</table>

				</div>
			</div>


			<div class="card">
				<div class="card-body">
					<form method="post">
						<button name="pinjam" class="btn btn-sm btn-success">Pinjam Buku !</button>
					</form>
				</div>
			</div>


		</div>
	</div>

</body>
</html>