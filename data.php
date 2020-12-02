<?php 
	include 'koneksi.php';

	$sql = "SELECT * FROM educat";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$link_delete = "<a class='hapusData' href='delete.php?Tahun=".$row['Tahun']."'>Delete</a>";
			$link_update = "<a class='updateData' href='update.php?Tahun=".$row['Tahun']."' Tahun='".$row['Tahun']."' Sekolah='".$row['Sekolah']. "' >Update</a>";
			echo  "Tahun : ".$row['Tahun']." Sekolah : ".$row['Sekolah']. " . | $link_update  | $link_delete <br/>" ;
		}
	}
 ?>