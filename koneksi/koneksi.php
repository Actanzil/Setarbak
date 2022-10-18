<?php
	$koneksi = mysqli_connect("localhost","root","","setarbak_website");
	// cek koneksi
	if (!$koneksi){

	die("Error koneksi: " . mysqli_connect_errno());
	}
?>