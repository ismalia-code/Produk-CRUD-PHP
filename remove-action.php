<?php
	require 'db.php';

	delete($_GET['produk']);

	header("Location: index.php");
?>