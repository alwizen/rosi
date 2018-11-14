<?php
include 'nav.php';
?>

<div class="container">
    <!-- <a href="tambah_user.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah User</a> -->
     <div class="panel-body">
      <table class="table table-bordered table-responsive" id="mydata">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Pelanggan</th>
            <th>Detail Barang</th>
            <th>Jumlah</th>
            <th><center>Status</center></th>
            <th><center>Aksi</center></th>
          </tr>
          </thead>
              <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pesanan");
                while ($d = mysqli_fetch_array($data)) {

                    echo '
              
          <tbody>
            <tr>
              <td>' . $no++ . '</td>
              <td>' . $d['nama_pelanggan'] . '</td>
              <td>' . $d['nama_barang'] . '</td>
              <td>' . $d['jumlah'] . '</td>
              <td class="success"><b>' . $d['status'] . '</b></td>
              <td>
                <center>
                  <a href="edit_user.php?id=' . $d['id'] . '" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a>

                  <a href="proses/proses_user.php?act=delete&id=' . $d['id'] . '" class="btn btn-danger" onclick ="if (!confirm(\'Apakah Anda yakin akan menghapus data ini?\')) return false;"><span class="glyphicon glyphicon-remove"></span></a>
                </center>
              </td>
              </tr>
                ';
                }
                ?> 
            </tbody>
          </table>
        </div>

    
</body>
<script>
$(document).ready( function () {
    $('#mydata').DataTable();
} );
</script>
</html>