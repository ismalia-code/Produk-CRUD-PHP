<!DOCTYPE html>
<html>
	<head>
		<title>Produk</title>
	</head>
	<body>
		<h1>Daftar Produk</h1>
		<nav>
			<a href="tambah-produk.php">Tambah Produk</a>
		</nav>
		<table>
			<tr>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Ubah</th>
				<th>Hapus</th>
			</tr>
			<?php
				require 'db.php';
				$products = readAll();

				while($product = mysqli_fetch_array($products)):
			?>
			<tr>
				<td><?php echo $product['nama_produk'] ?></td>
				<td><?php echo $product['keterangan'] ?></td>
				<td><?php echo $product['harga'] ?></td>
				<td><?php echo $product['jumlah'] ?></td>
				<td>
					<a href="ubah-produk.php?produk=<?php echo $product['nama_produk'] ?>">Ubah</a>
				</td>
				<td>
					<a href="remove-action.php?produk=<?php echo $product['nama_produk'] ?>">Hapus</a>
				</td>
			</tr>
			<?php endwhile?>
		</table>
	</body>
</html>