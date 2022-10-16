<?php
	include '../../config.php';
	mysqli_query($conn, "TRUNCATE TABLE daftar_barang");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (1, 'Test barang 1', 123, 'attacker')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (2, 'Test barang 1', 123, 'attacker')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (3, 'Test barang 2', 123, 'victim')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (4, 'Test barang 2', 123, 'victim')");
	header("Location: index.php");
?>