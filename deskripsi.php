<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deskripsi Hasil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <style>
		body {
			font-family: sans-serif;
			background: #e0e0e0;
		}
		h1 {
			font-style: italic;
			background: grey;
		}
		h2 {
			background: green;
		}
		h3 {
			background: red;
		}
		h1,h2,h3 {
			padding: 70px;
		}
	</style> -->
</head>
<body>
	<center>
		<h1><?php echo "Hasil ".@$_SESSION['nama']; ?><?php echo " , "; ?></h1>
		<h2><?php echo "Resiko Anda untuk tertular penyakit COVID 19 adalah ".@$_SESSION['deskripsi']; ?></h2>
		<h3>Ingat!!! Apapun hasilnya harus TENANG dan WASPADA</h3>
	</center>
</body>
</html>