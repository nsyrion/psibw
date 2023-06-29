<?php
	include "koneksi.php"; 
	$nim=$_GET['nim']; 

    $del = mysqli_query($conn, "DELETE FROM  mhs_web WHERE nim='$nim'");
    if($del){ 
			header("location:index.php");
		}else{
			header("location:index.php");
		}
?>