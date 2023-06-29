<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>PSIBW</title>
  <style>
    /* CSS styles for the layout */
    .button {
            background-color: cadetblue;
            border: none;
            border: 2px;
            border-color: cadetblue;
            color: black;
            padding: 10px 24px;
            border-radius: 6px;
            align-items: flex-start;

            text-align: center;
            margin-left: 500px;
            margin-right: 24px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }

        .button-warning {
            background-color: cadetblue;
            border: none;
            color: white;
            padding: 4px 24px;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button-hapus {
            background-color: #962531;
            border: none;
            color: white;
            padding: 4px 18px;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .table {
            background-color: #FFEFD5;
            border-collapse: collapse;

        }

        .button {
          background-color: cadetblue;
            border: none;
            border: 2px;
            border-color: cadetblue;
            color: white;
            padding: 10px 24px;
            border-radius: 6px;
            align-items: flex-start;
        }

        .select {
            width: 448;
            height: 36;
        }


    body {
      margin: 0;
      padding: 0;
      font-family: 'Montserrat';
      font-size: 16px;
    }

    header {
      background-color: #778899;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .logo {
      display: inline-block;
      margin-right: 10px;
      vertical-align: middle;
    }

    .logo img {
      height: 50px;
    }

    .header-content {
      display: inline-block;
      vertical-align: middle;
    }

    table {
			border-collapse: collapse;
			width: 100%;
			max-width: 1800px;
			margin: 20px auto;
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      
		}

    sidebar {
      background-color: #f2f2f2;
      width: 200px;
      padding: 20px;
      float: left;
    }

    sidebar a {
      text-decoration: none;
      color: #333;
    }

    main {
      margin-left: 220px;
      padding: 20px;
    }

    footer {
      background-color: #778899;
      color: #fff;
      padding: 20px;
      text-align: center;
      clear: both;
    }

    
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="Logo_Unri.png" alt="Logo">
    </div>
    <div class="header-content">
      <h1>FORM DATA MAHASISWA</h1>
    </div>
  </header>

  <sidebar>
    <h2>Home</h2>
    <ul>
      <li><a href="#">Selamat datang!</a></li>
      
    </ul>
  </sidebar>

  <main>
  <div class="tambahData">
  <table class="table" border="1" cellpadding="3" cellspacing="3" width="100%" ">
            <form action="tambah.php" method="POST">
            <tr>
                <td colspan="2" style="text-align:center;background-color: #CD853F; height:64px"> FORM TAMBAH DATA MAHASISWA
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 48px 0px 16px;">NIM</td>

                <td><input class="select" type="text" name="nim"></td>
            </tr>
            <tr>
                <td style="padding: 4px 48px 0px 16px;">Nama</td>

                <td><input class="select" type="text" name="nama"></td>
            </tr>
            <tr>
                <td style="padding: 4px 52px 0px 16px;">Jenis Kelamin</td>

                <td><select class="select" name="jenis_kelamin">
                        <option>Jenis Kelamin</option>
                        <option value="0">Perempuan</option>
                        <option value="1">Laki-laki</option>
                        
                </td>
            </tr>
            <tr>
            <tr>
                <td style="padding: 4px 52px 0px 16px;">Tanggal Lahir</td>

                <td><select name="tgl">
                  <?php
                    for($i=1;$i<=31;$i++){
                      if($i<=9){
                        echo"<option value='0$i'>"."0".$i."</option>";
                      }else{
                        echo"<option value='$i'>".$i."</option>";
                      }
                    }
                  ?>
                      </select>
                    <select name="bln">
                  <?php
                    for($i=1;$i<=12;$i++){
                        echo"<option value='$i'>".$i."</option>";
                    }
                  ?>
                      </select>
                    <select name="thn">
                  <?php
                    for($i=2000;$i<=date('Y');$i++){
                        echo"<option value='$i'>".$i."</option>";
                    }
                  ?>
                      </select></td>
            </tr>
                
            <tr>
                <td style="padding: 4px 52px 0px 16px;">Agama</td>

                <td><select class="select" name="agama">
                        <option>Pilih Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Khatolik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Budha</option>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 52px 0px 16px;">Prodi</td>

                <td><select class="select" name="prodi">
                        <option>Pilih Prodi</option>
                        <option value="1">Manajemen Informatika</option>
                        <option value="2">Sistem Informasi</option>
                        <option value="3">Biologi</option>
                        <option value="4">Matematika</option>
                        <option value="5">Fisika</option>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 52px 0px 16px;">Status</td>

                <td><select class="select" name="status">
                        <option>Pilih Status</option>
                        <option value="1">Aktif</option>
                        <option value="2">Cuti</option>
                        <option value="3">Alpa Studi</option>
                        <option value="4">Semhas</option>
                        <option value="5">Kompre</option>
                        <option value="6">Alumni</option>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 48px 0px 16px;">Alamat</td>

                <td><input class="select" type="text" name="alamat"></td>
            </tr>
            <td></td>
            <td style="text-align:left;" colspan=2>
                <input style="align-items: Right;" class="button" type="submit" name="submit" value="simpan">
            </td>
            </tr>
            </form>
        </table>
    </div>

    <h2>Selected Data (<span id="total-selected">0</span> selected)</h2>
   
    <script>
    $(document).ready(function() {
      $('input[type="checkbox"]').on('change', function() {
        var totalSelected = $('input[type="checkbox"]:checked').length;
        displayTotalSelected(totalSelected);
      });

      function displayTotalSelected(totalSelected) {
        $('#total-selected').text(totalSelected);
      }
    });
  </script>

    <div class="tabelMahasiswa">
        <table width="100%" style="background-color: #FFEFD5; " align="center" id="table-a" border="0" cellspacing="3">
            <tr>
                <td style="text-align:left ;  ">
                    <h2 style="margin-left: 24px;">List Mahasiswa</h2>
                </td>
                <td>
                    <form action="" method="POST">
                        <label>Cari :</label>
                        <input type="text" name="cari">
                        <input type="submit" name="Submitcari" value="Cari">
                        <input type="submit" value="Refresh">
                    </form>
                </td>
                <td>
                    <form action="import_mhs.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" accept=".csv">
                        <input type="submit" name="submit" value="Import">
                    </form>
                </td>

            </tr>
        </table>

          
        <table width="100%" align="center" class="bg" style="background-color: #FFEFD5;" cellspacing="3" style="border-radius: 4;" cellpadding="6">
            <form action="deletemulti.php" method="post">
                <tr class="border-rds" style='background-color:#CD853F;padding:10px;'>
                    <Input type="submit" name="hapus" value="delete"></Input>
                    <Th>
                        <input id="checkall" type="checkbox">
                    </Th>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>agama</th>
                    <th>Prodi</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>Proses</th>
                </tr>

                <?php
                include './koneksi.php';
                include 'Cari.php';
                $no = 1;
                foreach ($data as $row) {
                    $jenis_kelamin = $row['jenis_kelamin']  == '0' ? 'Perempuan' : 'Laki Laki';
                    

                    $agama = $row['agama'];
                    if ($row['agama'] == 1) {
                        $agama = 'Islam';
                    } else if ($row['agama'] == 2) {
                        $agama = 'Kristen';
                    } else if ($row['agama'] == 3) {
                        $agama = 'Khatolik';
                    } else if ($row['agama'] == 4) {
                        $agama = 'hindu';
                    } else if ($row['agama'] == 5) {
                        $agama = 'Budha';
                    }

                    $prodi = $row['prodi'];
                    if ($row['prodi'] == "1") {
                      $prodi = "Manajemen Informatika";
                    } else if ($row['prodi'] == "2") {
                      $prodi = "Sistem Informasi";
                    } else if ($row['prodi'] == "3") {
                      $prodi = "Biologi";
                    }else if ($row['prodi'] == "4") {
                      $prodi = "Matematika";
                    }else if ($row['prodi'] == "5") {
                      $prodi = "Fisika";
                    }

                    $status = $row['status'];
                    if ($row['status'] == 1) {
                        $status = 'Aktif';
                    } else if ($row['status'] == 2) {
                        $status = 'Cuti';
                    } else if ($row['status'] == 3) {
                        $status = 'Alpa Studi';
                    } else if ($row['status'] == 4) {
                        $status = 'Semhas';
                    } else if ($row['status'] == 5) {
                        $status = 'Kompre';
                    } else if ($row['status'] == 6) {
                        $status = 'Alumni';
                    }
                    echo "<tr style= 'background-color:#FFEFD5'> 
                    <td><input name='checkbox[]' value='" . $row['nim'] . "' type='checkbox'></td>
        			      <td>$no</td>
        			      <td>" . $row['nim'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $jenis_kelamin . "</td>
                    <td>" . $row['tgl_lahir'] . "</td>
                    <td>" . $agama . "</td>
                    <td>" . $prodi . "</td>
                    <td>" . $status . "</td>
                    <td>" . $row['alamat'] . "</td>
                    <td style='text-align:center;'>
                      <a class=" . '"button-warning"' . "href=edit.php?nim=$row[nim] style='text-decoration:none;'>Edit</a>
        		     <a class=" . '"button-hapus"' . "href=delete.php?nim=$row[nim] style='text-decoration:none;'>Delete</a>
                     </td>
              </tr>";
                    $no++;
                }
                ?>
            </form>
            <script>
                document.getElementById('checkall').onclick = function() {
                    var checkboxes = document.getElementsByName('checkbox[]');
                    for (var checkbox of checkboxes) {
                        checkbox.checked = this.checked;
                    }
                }

            </script>
            
            
        </table>
    
  </main>

  <footer>
    &copy; 2023 Afiqa Fadhya Nasywa's Page. All rights reserved.
  </footer>


</body>
</html>
