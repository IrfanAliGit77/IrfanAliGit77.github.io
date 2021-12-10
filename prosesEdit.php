<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$nama = $_GET['name'];
	$umur = $_GET['age'];
	$alamat = $_GET['address'];

	$query = "UPDATE peserta SET nama_peserta = '$nama', umur='$umur', alamat='$alamat' WHERE id='$id'";
	$result = mysqli_query($connect, $query);

	if ($result) {
		echo "Berhasil update data";
?>
	<a href="homeCURD.php" type="submit"> Lihat data </a>
<?php 
	}
	else{
		echo "Gagal update data".mysqli_error($connect);
	}
?>