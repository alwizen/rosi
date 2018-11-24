<?php
$title = "Data Pelanggan";
include 'nav.php';
include '../fungsi/rupiah.php';
include '../fungsi/tanggal.php';
?>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="custom.css">
 
  <div class="container">
    <a href="tambahBarang.php" class="btn btn-primary"> Tambah Data Barang</a>
     <div class="panel-body">
      <table class="table table-bordered table-responsive" id="mydata">
        <thead>
          <tr class="primary">
            <th>#</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th>Kadaluarsa</th>
            <th>Aksi</th>
          </tr>
          </thead>
              <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY tgl_masuk DESC");
                while ($d = mysqli_fetch_array($data)) {
                    echo '
              
          <tbody>
            <tr>
              <td>' . $no++ . '</td>
              <td>' . $d['nama_barang'] . '</td>
              <td>' . RP($d['harga']) . '</td>
              <td>' . $d['jumlah'] . '</td>
              <td>' . tgl_indo($d['tgl_masuk']) . '</td>
              <td>' . tgl_indo($d['kadaluarsa']) . '</td>
              <td>
                <center>
                  <a href="editUser.php?id_barang=' . $d['id_barang'] . '" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                  <a href="control/prosesBarang.php?act=delete&id_barang=' . $d['id_barang'] . '" class="btn btn-danger" onclick ="if (!confirm(\'Apakah Anda yakin akan menghapus data ini?\')) return false;"><span class="glyphicon glyphicon-trash"></span></a>
                </center>
              </td>
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