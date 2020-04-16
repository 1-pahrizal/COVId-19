<?php 
	session_start();
	require 'config/koneksi.php';
	if(isset($_POST['lanjut'])){
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['jk'] = $_POST['jk'];
		$_SESSION['usia'] = $_POST['usia'];
		echo "<script>alert('BERHASIL');document.location.href='test.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Isi Biodata Anda</title>
	<!-- <link rel="stylesheet" href="malam.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- <style>
		body {
			font-family: sans-serif;
			background: #e0e0e0;
		}
		div {
			border: 5px;
			color: red;
		}
		h1 {
			font-style: italic;
			background: grey;
		}
		ul {
			display: inline;
		}
		label {
			background: red;
			font-size: 30px;
		}
		input {
			height: 50px;
			width: 300px;
			border-radius: 50px;
			background: #ffffff;
			border-top: 1px solid #ffffff;
  			border-bottom: 1px solid #e0e0e0;
  			border-left: 1px solid #e0e0e0;
  			border-right: 1px solid #ffffff;
		}
		button {
			height: 50px;
			width: 300px;
			border-radius: 50px;
			background: green;
			border-top: 1px solid #ffffff;
  			border-bottom: 1px solid #e0e0e0;
  			border-left: 1px solid #e0e0e0;
  			border-right: 1px solid #ffffff;
		}
	</style> -->
</head>
<body>
<form action="" method="post">
    <h1>Isi Biodata Anda</h1>

    <fieldset id="UserDataFields">
   
        <div class="control-group">
            <label for="nama">Nama</label>
            <input type="text"
                   name="nama"
                   id="nama" required>
        </div>

        <div class="control-group">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L">Laki-laki
            <input type="radio" name="jk" value="P">Perempuan
        </div>

        <div class="control-group">
            <label for="usia">
                Usia
            </label>
            <input type="text" name="usia" id="usia" required>
        </div>

    <fieldset id="FormAction">
    	<br>
    	<br>
        <input type="submit" name="lanjut" value="Lanjut!">
    </fieldset>
</form>
</body>
</html>

