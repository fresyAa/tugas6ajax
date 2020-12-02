<?php 
	include 'koneksi.php';

	if (isset($_POST['Tahun'])) { #sementara pake tahun dulu
	#$Id = 1;
	$Tahun = $_POST['Tahun'];
	$Sekolah = $_POST['Sekolah'];
	$sql = "INSERT INTO educat VALUES ('','$Tahun','$Sekolah')";
	if(mysqli_query($conn,$sql)){
		echo "Berhasil Memasukkan Data";
	} else {
		echo "Eror Memasukkan Data <br/>".mysqli_error($conn); 
	}
}
 ?>