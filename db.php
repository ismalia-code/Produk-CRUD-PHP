<?php
	function create($nama, $keterangan, $harga, $jumlah) {
		$connection = mysqli_connect("localhost", "root", "", "arkademy");
		return mysqli_query($connection, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama', '$keterangan', '$harga', '$jumlah')");
	}

	function read($nama) {
		$connection = mysqli_connect("localhost", "root", "", "arkademy");
		return mysqli_query($connection, "SELECT * FROM produk WHERE nama_produk='$nama'");
	}

	function readAll() {
		$connection = mysqli_connect("localhost", "root", "", "arkademy");
		return mysqli_query($connection, "SELECT * FROM produk");
	}

	function update($nama, $nama_lama, $keterangan, $harga, $jumlah) {
		$connection = mysqli_connect("localhost", "root", "", "arkademy");
		return mysqli_query($connection, "UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE nama_produk='$nama_lama'");
	}

	function delete($nama) {
		$connection = mysqli_connect("localhost", "root", "", "arkademy");
		return mysqli_query($connection, "DELETE FROM produk WHERE nama_produk='$nama'");
	}
?>