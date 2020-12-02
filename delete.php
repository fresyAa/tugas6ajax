<?php 
	include 'koneksi.php';

	$sql = "DELETE FROM educat WHERE Tahun='".$_GET['Tahun']."'";
	$result = mysqli_query($conn,$sql);
	
 ?>  