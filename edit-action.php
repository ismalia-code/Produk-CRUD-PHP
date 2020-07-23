<?php
	require 'db.php';

	update($_POST['nama'], $_POST['nama-lama'], $_POST['keterangan'], $_POST['harga'], $_POST['jumlah']);

	header("Location: index.php");
?>