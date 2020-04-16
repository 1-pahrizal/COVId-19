<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendeteksi Covid 19</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<form method="post" action="">
<body>
	<center>
		<h2><?php echo "Selamat Datang ".@$_SESSION['nama']; ?></h2>
		<h1>Penilaian Resiko Pribadi terkait COVID 19</h1>
	</center>
	<table cellspacing="0">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kegiatan</th>
				<th>YA</th>
				<th>TIDAK</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Saya pergi keluar rumah</td>
				<td>
					<input type="radio" name="1" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="1" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api dll</td>
				<td>
					<input type="radio" name="2" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="2" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Saya tidak menggunakan masker saat berkumpul dengan orang lain</td>
				<td>
					<input type="radio" name="3" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="3" value="0" required>T
				</td>
			</tr>
		    <tr>
				<td>4</td>
				<td>Saya berjabat tangan dengan orang lain</td>
				<td>
					<input type="radio" name="4" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="4" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor</td>
				<td>
					<input type="radio" name="5" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="5" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Saya menyentuh benda/uang yang juga disentuh orang lain</td>
				<td>
					<input type="radio" name="6" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="6" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah dll</td>
				<td>
					<input type="radio" name="7" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="7" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>8</td>
				<td>Saya makan diluar rumah (warung/restaurant)</td>
				<td>
					<input type="radio" name="8" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="8" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>9</td>
				<td>Saya tidak minum air hangat & cuci tangan dengan sabun</td>
				<td>
					<input type="radio" name="9" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="9" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>10</td>
				<td>Saya berada di wilayah kelurahan tempat pasien tertular</td>
				<td>
					<input type="radio" name="10" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="10" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>11</td>
				<td>Saya tidak pasang hand sanitizer di depan pintu masuk, untuk membersihkan tangan sebelum pegang gagang(handle) pintu masuk rumah</td>
				<td>
					<input type="radio" name="11" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="11" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>12</td>
				<td>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
				<td>
					<input type="radio" name="12" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="12" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>13</td>
				<td>Saya tidak menyediakan : tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah</td>
				<td>
					<input type="radio" name="13" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="13" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>14</td>
				<td>Saya tidak segera merendam baju & celana bekas pakai di luar rumah ledalam air panas/sabun</td>
				<td>
					<input type="radio" name="14" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="14" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>15</td>
				<td>Saya selalu minum air 15 menit sekali</td>
				<td>
					<input type="radio" name="15" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="15" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>16</td>
				<td>Saya tidak segera mandi keramas setelah saya tiba di rumah</td>
				<td>
					<input type="radio" name="16" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="16" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>17</td>
				<td>Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
				<td>
					<input type="radio" name="17" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="17" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>18</td>
				<td>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
				<td>
					<input type="radio" name="18" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="18" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Saya tidak jalan kaki/berolah raga minimal 30 menit setiap hari</td>
				<td>
					<input type="radio" name="19" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="19" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>20</td>
				<td>Saya jarang minum vitamin C & E, dan kurang tidur</td>
				<td>
					<input type="radio" name="20" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="20" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>21</td>
				<td>Usia saya diatas 60 tahun</td>
				<td>
					<input type="radio" name="21" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="21" value="0" required>T
				</td>
			</tr>
			<tr>
				<td>22</td>
				<td>Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
				<td>
					<input type="radio" name="22" value="1" required>Y
				</td>
				<td>
					<input type="radio" name="22" value="0" required>T
				</td>
			</tr>
			<tr>
				<td colspan="2"> 
					<center> 
						<h1>Total Jawaban YA </h1>
						<button name="total">Total!</button>
					</center>
				</td>
				<td colspan="2">
					<?php  
						require 'config/koneksi.php';
						//Klik tombol total yang dikirim dari form
						if (isset($_POST['total'])) {

						    $total = $_POST['1'] + $_POST['2'] + $_POST['3'] +  $_POST['4'] +  $_POST['5'] +  $_POST['6'] +  $_POST['7'] +  $_POST['8'] +  $_POST['9'] +  $_POST['10'] +  $_POST['11'] +  $_POST['12'] +  $_POST['13'] +  $_POST['14'] +  $_POST['15'] +  $_POST['16'] +  $_POST['17'] +  $_POST['18'] +  $_POST['19'] +  $_POST['20'] +  $_POST['21'] +  $_POST['22'];

						    if ($total >= 15) {
						  		$desk = "RESIKO TINGGI";
						  } elseif ($total >= 8) {
						  		$desk = "RESIKO SEDANG";
						  } elseif ($total >= 0) {
						  		$desk = "RESIKO RENDAH";
						  } else {
						  		echo "tidak valid";
						  }

						  $sql = mysqli_query($con, "INSERT INTO hasil VALUES('','$_SESSION[nama]','$_SESSION[jk]', '$_SESSION[usia]','$total','$desk')");
							  if ($sql) {
							  	$_SESSION['deskripsi'] = $desk;
								echo "<script>alert('BERHASIL');document.location.href='deskripsi.php';</script>";
							  }else{
								echo "<script>alert('GAGAl');document.location.href='test.php';</script>";
						      }
						}	
					?>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</form>
</html>