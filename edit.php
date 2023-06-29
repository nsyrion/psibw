<!doctype html>
<html>

<head>
	<title>Edit Data Mahasiswa</title>
	<style>
		body {
			width: 1200px;
			margin: 0 auto;
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		
		table {
			border-collapse: collapse;
			background-color: #FFEFD5;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
		}
		
		table tr th,
		table tr td {
			padding: 20px;
			text-align: left;
			border: 1px solid #ddd;
		}
		
		table tr th {
			background-color: #f1f1f1;
			font-weight: bold;
		}
		
		form {
			margin-bottom: 0;
		}
		
		form input[type="text"],
		form select {
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 4px;
			font-size: 14px;
		}
		
		form select {
			width: 100%;
			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			background-image: url('https://www.flaticon.com/svg/static/icons/svg/25/25619.svg');
			background-repeat: no-repeat;
			background-position: right 10px center;
			background-size: 20px;
		}
		
		form input[type="submit"] {
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			background-color: #4caf50;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}
		
		form input[type="submit"]:hover {
			background-color: #45a049;
		}
		
		.container {
			margin-top: 50px;
		}
	</style>
</head>

<body>
	<?php
	include "koneksi.php";
	$nim = $_GET['nim'];
	$pilih = mysqli_query($conn, "SELECT * FROM mhs_web where nim='$nim'");
	foreach ($pilih as $has);
	?>
	<table border="1" cellpadding="3" cellspacing="3" width="1200px" style="border-collapse:collapse;">
		<form method="post" action="proses_update.php">
			<tr>
				<td colspan="3" style="text-align:center;">UPDATE DATA MAHASISWA</td>
			</tr>
			<tr>
				<td style="text-align:left">NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="8" value="<?php echo $has['nim']; ?>" ></td>
			</tr>
			<tr>
				<td style="text-align:left">NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $has['nama']; ?>"></td>
			</tr>
			<tr>
				<td style="text-align:left">JENIS KELAMIN</td>
				<td>:</td>
				<td><?php $jenis_kelamin = $has['jenis_kelamin'] == '0' ? 'Perempuan' : 'Laki-Laki'; ?>
					<select name="jenis_kelamin">
						<option value="1">Laki-Laki</option>
						<option value="0">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:left">AGAMA</td>
				<td>:</td>
				<td><select name="agama">
						<option value="1">Islam</option>
						<option value="2">Kristen</option>
						<option value="3">Konghucu</option>
						<option value="4">Hindu</option>
						<option value="5">Budha</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:left">TANGGAL LAHIR</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" size="30" placeholder="dd/mm/yyyy" value="<?php echo $has['tgl_lahir']; ?>">
				</td>
			</tr>
			<tr>
				<td style="text-align:left">PRODI</td>
				<td>:</td>
				<td><select name="prodi">
						<option value="1">Manajemen Informatika</option>
						<option value="2">Sistem Informasi</option>
						<option value="3">Biologi</option>
						<option value="4">Matematika</option>
						<option value="5">Fisika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:left">STATUS</td>
				<td>:</td>
				<td><select name="status">
						<option value="1">Aktif</option>
						<option value="2">Cuti</option>
						<option value="3">Alpa Studi</option>
						<option value="4">Semhas</option>
						<option value="5">Kompre</option>
						<option value="6">Alumni</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:left">ALAMAT</td>
				<td>:</td>
				<td><input type="text" size="60" name="alamat" value=" <?php echo $has['alamat']; ?>"></td>
			</tr><tr></tr><tr>
		<td colspan="3" style="text-align:right;">
			<input type="submit" name="submit" value="UPDATE">
		</td>
	</tr>
		</form>
	</table>
</body>

</html>