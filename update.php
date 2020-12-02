<?php 
	include 'koneksi.php';
	$Tahun = $_POST['Tahun'];
	$Sekolah = $_POST['Sekolah'];
	$sql = "UPDATE educat SET Tahun='$Tahun',Sekolah='$Sekolah' WHERE Tahun='".$_GET['Tahun']."'";
	$result = mysqli_query($conn,$sql);
	
 ?>  