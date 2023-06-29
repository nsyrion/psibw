<?php
	include "koneksi.php"; //memanggil file koneksi.php
	$nim=$_POST['nim']; //mengambil nilai nim dari form
	$nama=$_POST['nama'];//mengambil nilai nama dari form
	$jenis_kelamin=$_POST['jenis_kelamin'];//mengambil nilai jenis_kelamin dari form
	$agama=$_POST['agama'];//mengambil nilai agama dari form
	$tgl_lahir=$_POST['tgl_lahir'];//mengambil nilai tanggal lahir dari form	
	$prodi=$_POST['prodi'];//mengambil nilai prodi dari form
	$status=$_POST['status'];//mengambil nilai status dari form
	$alamat=$_POST['alamat'];//mengambil nilai alamat dari form

	if (isset($_POST['submit'])) { //apakah benar tombol submit yang di-klik ? klo benar insertkan data
        $up = mysqli_query($conn, "UPDATE mhs_web
        SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',agama='$agama',tgl_lahir='$tgl_lahir', prodi='$prodi',status='$status', alamat='$alamat' WHERE nim='$nim'");
    
		if($up){ // apakah data sukses di-isert-kan ?
			header("location:index.php");//klo sukses alihkan ke halaman index.php
		}else{
			header("location:edit.php");//klo gagal tetap pada form tambah.php.
		}
	}
?>