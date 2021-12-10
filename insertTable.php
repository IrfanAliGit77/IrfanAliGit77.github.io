<?php  
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "juniorweb";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	if ($connect) {
		echo "Koneksi ke MySQL berhasil <br>";
	}
	else{
		echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
	}

	$sql = "INSERT INTO peserta(id, nama_peserta, umur, alamat)
			VALUES(1, 'Irfan Ali', 19, 'Blitar Jatiim')";
	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>