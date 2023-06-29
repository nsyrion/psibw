<?php
include './koneksi.php';

$koneksi = mysqli_connect('localhost', 'root', '', 'fmipa2');

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['hapus'])){
    $checkbox = $_POST['checkbox'];
    for ($i=0; $i<count($checkbox); $i++){
        $nim = $checkbox[$i];
        $query = "DELETE FROM mhs_web WHERE nim='$nim'";
        $result = mysqli_query($koneksi, $query);
        
        if($result){
            echo "Data deleted successfully for nim: $nim<br>";
        } else {
            echo "Error deleting data for nim: $nim. Error: " . mysqli_error($koneksi) . "<br>";
        }
    }
    header("Location: index.php");
}

mysqli_close($koneksi);
?>
