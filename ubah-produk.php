<!DOCTYPE html>
<html>
	<head>
		<title>Produk</title>
	</head>
	<body>
		<h1>Tambah Produk</h1>
		<nav>
			<a href="index.php">Daftar Produk</a>
		</nav>
		<form action="edit-action.php"  method="post">
			<?php
				require 'db.php';

				$product = read($_GET['produk']);

				$product = mysqli_fetch_array($product);
			?>
			<span>Nama Produk</span>
			<br>
			<input type="text" name="nama" value="<?php echo $product['nama_produk'] ?>">
			<br>

			<span>Keterangan</span>
			<br>
			<textarea name="keterangan"><?php echo $product['keterangan'] ?></textarea>
			<br>

			<span>Harga</span>
			<br>
			<input type="number" name="harga" value="<?php echo $product['harga'] ?>">
			<br>

			<span>Jumlah</span>
			<br>
			<input type="number" name="jumlah" value="<?php echo $product['jumlah'] ?>">
			<br>

			<input type="hidden" name="nama-lama" value="<?php echo $product['nama_produk'] ?>">

			<input type="submit" name="submit" value="Ubah Produk">
		</form>
	</body>
</html>