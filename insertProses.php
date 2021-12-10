<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$nama = $_GET['name'];
	$umur = $_GET['age'];
	$alamat = $_GET['address'];

	$sql = "INSERT INTO peserta(id, nama_peserta, umur, alamat)
			VALUES ('$id','$nama', '$umur', '$alamat')";

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>