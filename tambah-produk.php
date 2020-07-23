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
		<form action="add-action.php"  method="post">
			<span>Nama Produk</span>
			<br>
			<input type="text" name="nama">
			<br>

			<span>Keterangan</span>
			<br>
			<textarea name="keterangan"></textarea>
			<br>

			<span>Harga</span>
			<br>
			<input type="number" name="harga">
			<br>

			<span>Jumlah</span>
			<br>
			<input type="number" name="jumlah">
			<br>
			
			<input type="submit" name="submit" value="Tambah Produk">
		</form>
	</body>
</html>