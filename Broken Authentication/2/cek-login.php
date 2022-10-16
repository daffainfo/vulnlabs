<?php
	session_start();

	include '../../config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);

	$query = "SELECT *
				FROM user
				WHERE username = '$username' AND password = '$password'";

	$data = mysqli_query($conn, $query);

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		setcookie("username", $username, time()+30*24*60*60);
		$_SESSION["status_login_user"] = "true";
		header("Location: dashboard.php");
	} else {
		header("Location: index.php?pesan=gagal");
	}


?>