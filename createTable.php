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

	$sql = "CREATE TABLE peserta(
			id INT PRIMARY KEY,
			nama_peserta VARCHAR(60) NOT NULL,
			umur INT NOT NULL,
			alamat VARCHAR(60) NOT NULL)";
	if (mysqli_query($connect, $sql)) {
		echo "Tabel Peserta berhasil dibuat";
	}
	else{
		echo "Tabel Peserta gagal dibuat <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>