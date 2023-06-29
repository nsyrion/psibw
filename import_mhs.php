<?php
// include mysql database configuration file
include 'koneksi.php';

if (isset($_POST['submit'])) {

    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );

    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {
        // Open uploaded CSV file with read-only mode
        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

        // Skip the first line
        fgetcsv($csvFile);

        // Parse data from CSV file line by line
        while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
            // Get row data
            $nim = $getData[0];
            $nama = $getData[1];
            $jenis_kelamin = $getData[2];
            $tgl_lahir = $getData[3];
            $agama = $getData[4];
            $prodi = $getData[5];
            $status = $getData[6];
            $alamat = $getData[7];

            // If user already exists in the database with the same email
            $query = "SELECT id_mahasiswa FROM mhs_web WHERE nim = '" . $getData[0] . "'";

            $check = mysqli_query($conn, $query);

            if ($check->num_rows > 0) {
                mysqli_query($conn, "UPDATE mhs_web SET nama = '" . $nama . "', jenis_kelamin = '" . $jenis_kelamin . "', tgl_lahir = '" . $tgl_lahir . "', agama = '" . $agama . "', prodi = '" . $prodi . "', status = '" . $status . "',  alamat = '" . $alamat . "' WHERE nim = '" . $nim . "'");
            } else {
                mysqli_query($conn, "INSERT INTO mhs_web (nim, nama, jenis_kelamin, tgl_lahir, agama, prodi, status, alamat) VALUES ('" . $nim . "', '" . $nama . "', '" . $jenis_kelamin . "','" . $tgl_lahir . "','" . $agama . "','" . $prodi . "','" . $status . "','" . $alamat . "')");
            }
        }

        // Close opened CSV file
        fclose($csvFile);

        header("location:index.php");
    } else {
        echo "Please select a valid file";
    }
}