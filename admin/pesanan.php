<?php
$title = "Detail Pembelian";
include 'nav.php';
include '../koneksi.php';
include '../fungsi/tanggal.php';
include '../fungsi/rupiah.php';
?>
 <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../css/jquery-ui.css">

<div class="container">
  <div class="panel panel-primary">
  <!-- Default panel contents -->
    <div class="panel-heading"><strong>Detail Pembelian</strong></div>
    <div class="panel-body">
   
        <div>
            <table class="table table-bordered table-hover table-responsive" id="mydata">
              <thead>
              <tr>
                <th>No</th>
                <th>Kode Pesanan</th>
                <th>Sales</th>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Grand Total</th>
                <th><center> Detail </center></th>
            </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                $query = "SELECT  
                        ps.id_pesanan,
                        ps.kode, 
                        ps.sales,
                        ps.tanggal,
                        b.nama_barang,
                        b.harga,
                        pd.jumlah,
                        pl.nama_toko, 
                        pl.alamat,
                        SUM(pd.jumlah*b.harga) AS grand_total
                        FROM pesanan ps
                        LEFT JOIN pesanan_detail pd ON ps.id_pesanan=pd.id_pesanan
                        LEFT JOIN barang b ON pd.id_barang=b.id_barang
                        LEFT JOIN pelanggan pl ON ps.id_toko=pl.id_toko
                        GROUP BY ps.kode ORDER BY ps.id_pesanan DESC";
                $sql = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_array($sql)) {
                    echo '
                  <tr>
                  <td>' . $no++ . '</td>
                  <td>' . $row["kode"] . '</td>
                  <td>' . $row['sales'] . '</td>
                  <td>' . tgl_indo($row["tanggal"]) . '</td>
                  <td>' . $row["nama_toko"] . '</td>
                  <td>' . $row["alamat"] . '</td>
                  <td>' . Rp($row["grand_total"]) . '</td>
                  <td>
                              <button type="button" class="btn btn-info" onclick="getDetailTransaksi(' . $row['id_pesanan'] . ')">Detail</button>
                            </td>
                  </tr>
                 ';
                }
                ?>
              </tbody>
            </table>
      </div>
  </div>
</div>
</div>


<!-- Modal -->
<div id="modal_list" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="judul"> </h4>
      </div>
      <div class="modal-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody id="list_pesanan">
              
            </tbody>
          </table>      
  

      </div>
      <div class="modal-footer">
    <!--     <button class="btn btn-danger">Cetak</button> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


 
 <script>
  $(document).ready(function() {
    $('#mydata').dataTable();
  });
  var getDetailTransaksi = function (id_pesanan) {

    $.get("m_pesanan.php?id_pesanan="+id_pesanan, function(response){
      $("#list_pesanan").html('');
      console.log(response);
        if (response.data.length > 0 ) {
          $.each(response.data, function(i,obj){
            console.log(obj);
            var content = "<tr>";  
            content += "<td>" + obj.nama_barang + "</td>";
            content += "<td>" + obj.harga + "</td>";
            content += "<td>" + obj.jumlah + "</td>";
            content +=  "</tr>"; 
            $("#list_pesanan").append(content);
          })
          $("#judul").html(response.judul);
          $("#modal_list").modal('show');
        }
         
    },'json');
  }
</script>
</body>
</html>


