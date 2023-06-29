<?php
    include "koneksi.php";

	if(isset($_POST['Submitcari'])){
		$cari = $_POST['cari'];
		$data = mysqli_query($conn,"SELECT * from mhs_web where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($conn,"SELECT * from mhs_web order by nama asc");
				
	}
?>