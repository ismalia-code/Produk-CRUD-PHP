<?php
	require 'db.php';

	create($_POST['nama'], $_POST['keterangan'], $_POST['harga'], $_POST['jumlah']);

	header("Location: index.php");
?>