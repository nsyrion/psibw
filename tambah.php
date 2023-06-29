<?php
	include "koneksi.php"; //memanggil file koneksi.php
	$nim=$_POST['nim']; //mengambil nilai nim dari form
	$nama=$_POST['nama'];//mengambil nilai nama dari form
    

	$tgl = $_POST['tgl'];
	$bln = $_POST['bln'];
	$thn = $_POST['thn'];
	$tgl_lahir =$thn."-".$bln."-".$tgl;

    $jk  = $_POST['jenis_kelamin'];//mengambil nilai jk dari form
    $agama=$_POST['agama'];//mengambil nilai agama dari form
	$prodi=$_POST['prodi'];//mengambil nilai prodi dari form
	$status=$_POST['status'];//mengambil nilai status dari form
	$alamat=$_POST['alamat'];//mengambil nilai alamat dari form
	
	if(isset($_POST['submit'])){//apakah benar tombol submit yang di-klik ? klo benar insertkan data
		$ins=mysqli_query($conn,"INSERT INTO MHS_WEB(nim,nama,tgl_lahir,jenis_kelamin,agama,prodi,status,alamat)
		                           VALUES('$nim','$nama','$tgl_lahir','$jk','$agama','$prodi','$status','$alamat')");
		if($ins){ // apakah data sukses di-isert-kan ?
			header("location:index.php");//klo sukses alihkan ke halaman index.php
		}else{
			header("location:tambah.php");//klo gagal tetap pada form tambah.php.
		}
	}
?>