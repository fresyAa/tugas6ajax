<!DOCTYPE html>
<html>
<head>
	<title>CV FRESYA</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="960.css">
</head>
<body style="background : lightgreen">
	<div class="container_12" > 
		<div class="grid_12" style="background: purple">
			<center><h1>CURRICULUM VITAE</h1></center>	
		</div>
	</div>
	
	<div class="container_12" >
		<div class="grid_4">
			<div style="background: yellow">
				<img src="foto1.jpg" width="300" height="300">
				<?php
				function tampilisi(){
					$nama = "FRESYA CHANDRA D";
					$pangkat = "Mahasiswa Upn Jawatimur";
					echo "<h2> $nama <h2>";
					echo "$pangkat";
				}
					tampilisi();
				?>
			</div>
			<div style="background: green">
				<h3><u>Profile<u></h3>
				<?php 
				function tampilprofil(){
					$isiprofil = "Saya merupakan mahasiswa Universitas Pembangunan Nasional 'VETERAN' Jawa Timur dengan prodi Informatika" ; 
					echo "$isiprofil";
				}
				tampilprofil()
				?>
			</div>
			<div style="background: orange">
				<h3><u>Contact Information<u></h3>
				<?php 
					function tampilcontact(){
					$phone = "(+62)82230969727" ;
					$email = "chanmost89@gmail.com" ;
					$alamat = "Ds Senden Kecamatan Kayen Kidul Kabupaten Kediri" ;
					echo "Hp = $phone <br>" ;
					echo "Email = $email <br>" ;
					echo "Alamat = $alamat";
				}
				tampilcontact() 
				?>
			</div>
			<div style="background: lightblue">
				<h3><u>Social Media<u></h3>
				<?php 
					function tampilsosial(){
					$fb = "fb.com/Chan most" ;
					$ig = "@fresya_chandra" ;	
					echo "$fb <br>";
					echo "$ig";
					}
					tampilsosial();
				?>
				<br>
			</div>
		</div>
		<div class="grid_8" >
			<div style="background: white">

				<h3><u>Education<u></h3>
					<script type="text/javascript" src="jquery.js"></script>
					<form action="simpan.php" method="POST">
					<input type="text" name="Tahun" placeholder="Tahun Anda..." />
					<input type="text" name="Sekolah" placeholder="Sekolah Anda..." />
					<input type="submit" name="submit" value="submit" />
					</form>
					<hr>
					
					<div id="content">

					</div>

					<script type="text/javascript">
					$(document).ready(function(){
						loadData();

						$('form').on('submit',function(e){
							e.preventDefault();
							$.ajax({
								type:$(this).attr('method'),
								url:$(this).attr('action'),
								data:$(this).serialize(),
								success:function(){
									loadData();
									resetForm();
								}
							});
						})
					})

					function loadData(){
							$.get('data.php',function(data){
								$('#content').html(data)
								$('.hapusData').click(function(e){
									e.preventDefault();
									$.ajax({
										type:'get',
										url:$(this).attr('href'),
										success:function(){
											loadData();
									}
								});
							});
							$('.updateData').click(function(e){
								e.preventDefault()
								$(this).attr('Tahun');
								$('[name=Tahun]').val($(this).attr('Tahun'));
								$('[name=Sekolah]').val($(this).attr('Sekolah')); 
								$('form').attr('action',$(this).attr('href'));
							});
						})
					}

					function resetForm(){
						$('[type=text]').val('');
						$('[name=Tahun]').focus();
						$('form').attr('action','simpan.php');
					}
				</script>
			</div>

			<div style="background: pink">
				<div>
					<h3><u>Experience<u></h3>
					<?php 
						function tampilpengalaman(){
							$pengalaman = "Belum Memiliki Pengalaman Bekerja Secara Resmi" ;

							echo "$pengalaman";
						}
						tampilpengalaman() ;
					?>
				</div>
			</div>

			<div style="background: lightblue">
				<div>
					<h3><u>Awards<u></h3>
					<?php 
						function tampilawards(){
							$sertif = "2018 Quarter Finalist Of Statistics Competition ( STATION ) ITS Tingkat Nasional" ;
							echo "$sertif";
						}
					tampilawards();
					?>	
				</div>
					
			</div>

			<div style="background: lightgrey">
				<div>
					<h3><u>Skills<u></h3>
					<img src="1fres.jpeg" width="600" height="300" >
				</div>
			</div>

		</div>
	</div>


	
</body>
</html>