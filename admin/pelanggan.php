<?php
$title = "Data Pelanggan";
include 'nav.php'
?>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="custom.css">
 
  <div class="container">
    <a href="tambahPelanggan.php" class="btn btn-primary"> Tambah Data Pelanggan</a>
     <div class="panel-body">
      <table class="table table-bordered table-responsive" id="mydata">
        <thead>
          <tr class="primary">
            <th>#</th>
            <th>Nama Toko</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>No Telpon</th>
          </tr>
          </thead>
              <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                while ($d = mysqli_fetch_array($data)) {
                    echo '
              
          <tbody>
            <tr>
              <td>' . $no++ . '</td>
              <td>' . $d['nama_toko'] . '</td>
              <td>' . $d['pemilik'] . '</td>
              <td>' . $d['alamat'] . '</td>
              <td>' . $d['no_tlp'] . '</td>
              
              </tr>
                ';
                }
                ?> 
            </tbody>
          </table>
        </div>
<script>
    $(document).ready(function() {
    $('#mydata').dataTable({
    });
    responsive: true
  });
</script>