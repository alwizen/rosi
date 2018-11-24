<?php
$title = "Transaksi Penjualan ";
include 'nav.php';
include '../koneksi.php';
// include '../assets/fungsi_tanggal.php';
?>
<link rel="stylesheet" href="../css/select2.min.css">
<link rel="stylesheet" href="../css/select2-bootstrap.min.css">
<div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-lg-6">
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-tag"></span><strong> Form Transaksi Pemesanan</strong></h3>
          </div>
          <div class="panel-body">
            <!-- <form id="form_input" action="proses/proses.php" method="post"> -->

                <!-- tanggal dan model  -->
                 <div class="row">
                   <input type="hidden" name="sales" id="sales" value="<?php echo $nama; ?>" class="form-control" readonly/>
                   <div class="col-xs-2 form-group">
                     <label>Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal"  class="form-control" required />
                     </div>


                      <?php
                        $query = "SELECT * FROM pelanggan";
                        $result = mysqli_query($koneksi, $query);
                        ?>

                  <div class="col-xs-4 form-group">
                     <label>Pelanggan</label>
                        <select class="form-control nama_toko" id="id_toko" name="id_toko">
                            <?php while ($row1 = mysqli_fetch_array($result)) :; ?>

                            <option value="<?php echo $row1['id_toko']; ?>"><?php echo $row1['nama_toko']; ?></option>

                            <?php endwhile; ?>

                        </select>
                     </div>

                    <?php
                    $query = "SELECT * FROM barang";
                    $result = mysqli_query($koneksi, $query);
                    ?>

                  <div class="col-xs-4 form-group">
                     <label>Nama Barang</label>
                        <select class="form-control item" id="item" name="nama_barang">
                            <?php while ($row1 = mysqli_fetch_array($result)) :; ?>

                            <option value="<?php echo $row1['id_barang']; ?>" data-harga="<?php echo $row1["harga"] ?>"><?php echo $row1['nama_barang']; ?></option>

                            <?php endwhile; ?>

                        </select>
                     </div>
                     <div class="row">
                  <div class="col-xs-2 form-group">
                     <label class="control-label">Jumlah</label>
                     <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah" required>
                   </div>
                   </div>

                   <div class="col-xs-1 form-group">

                     <label class="control-label"></label>
                   <input type="button" id="add_item" value="Tambah Barang" class="btn btn-primary" disabled>
                 </div><br>

                 </div>
                 <!-- akhir tanggal dan model -->
                 <!-- button -->
                 <br>
                                <!-- Table -->
                    <table class="table table-hover" id="order_items_table">
                      <thead>
                        <tr class="primary">
                          <th>#</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Sub-Total</th>
                          <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                     </tbody>
                     <tfoot>
                       <tr>
                        <td colspan="3">Total</td>
                        <td><input type="text" id="total_barang" class="form-control" readonly></td>
                        <td><input type="text" id="grand_total_harga" class="form-control" readonly></td>
                        <td></td>
                      </tr>
                     </tfoot>
                   </table><br>
                   <div class="row">
                    <div class="col-lg-3 col-lg-offset-7">
                      <!-- <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Rp</span>
                        <input type="number" class="form-control" id="total_dibayarkan" placeholder="Total Bayar ..">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Rp</span>
                        <input type="number" class="form-control" id="total_kembalian" placeholder="Kembalian .." disabled>
                      </div> -->

                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-primary" type="button" id="checkout">Bayar</button>
                          <!-- <a href="cari.php" target="_BLANK" class="btn btn-primary" type="button" id="checkout">Bayar</a> -->
                        <a href="kasir/index.php" class="btn btn-default">Batal</a>
                      </div>
                  </div><!-- /.row -->
                  </div>
                </div>
              </div>
            <!-- </form> -->
         </div>
      </div>
   </div>
</div>

</body>
 <!-- library jQuery -->
 <!-- <script src="../js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/select2.min.js"></script>


  <script>
      $(document).ready(function() {
      $('.item').select2({
       theme: "bootstrap",
       placeholder: "Pilih Barang",
       allowClear: true
        });
      $('.nama_toko').select2({
       theme: "bootstrap",
       placeholder: "Pilih Pelanggan",
       allowClear: true
        });
    });


       $('#add_item').prop('disabled', true);
          $("#jumlah").on("keyup", function() {
              if ((this.value != '') && ($("#item").val() !='')) {
                $('#add_item').prop('disabled', false);
              } else {
                $('#add_item').prop('disabled', true);
              }
          });

          $order_items = [];
          $total_harga = 0;
          $number =1;
      var formBarang={
        getTotal:function(){
          var totalHarga = 0;
          var totalBarang = 0;
          $('.row_barang').each(function(){
            totalBarang += parseFloat($(this).find('td:eq(3)').text());
            totalHarga += parseFloat($(this).find('td:eq(4)').text());
          });
          $('#total_barang').val(totalBarang);
          $('#grand_total_harga').val(totalHarga);
        }
      }
      $(function() {
          $("#add_item").on("click", function() {
              // Add data to order_items before it's submitted
              var url = "cekStok.php?id="+$("#item").val();
              $.get(url,function(response){
                console.log(response);
                var stok = parseInt(response.stok);
                var jumlah = parseInt($("#jumlah").val()); 

                if (stok < jumlah ) {
                  alert("stok tidak cukup");
                  return false;
                }else{
              $order_items.push({
                "id_toko":$("#id_toko").val(),
                "kd_barang": $("#item").val(),
                "jumlah": $("#jumlah").val(),
                "harga": $("#item option:selected").attr("data-harga"),
                "temp_id":$number

              });

              $total_harga += (parseInt($("#jumlah").val()) * parseInt($("#item option:selected").attr("data-harga")));
              // Add row to table
              $("#order_items_table > tbody").append("<tr class='row_barang'><td>" + ($order_items.length + 0) + "</td><td>" + $("#item option:selected").text()  + "</td><td>" + $("#item option:selected").attr("data-harga") + "</td><td>" + $("#jumlah").val() + "</td><td>" + (parseInt($("#jumlah").val()) * parseInt($("#item option:selected").attr("data-harga"))) + "</td><td> <button data-id='"+$number+"' class='btn btn-danger hapus_item'>Hapus</button> </td></tr>");

              // Reset selected item and quantity
              $("#jumlah").val("");
              $("#item").prop("selectedIndex", 0);

              console.log($order_items);
              $number++;
              formBarang.getTotal();
                              }
              },'json')  
          });
          
          $("#total_dibayarkan").on("keyup", function() {
              $("#total_kembalian").val(parseInt($(this).val()) - $total_harga);
          });
           $(document).on("click", ".hapus_item", function(e){
                        // console.log('hapus');
            var del = confirm('Apakah Anda yakin akan menghapus data ini?');
            if (del == true) {
             var tempId = $(this).attr('data-id');
                console.log(tempId);
                var temp_order_items = $order_items.filter(function(obj) {
                  return obj.temp_id != tempId;
                });
                $order_items = temp_order_items;
                $(this).parent().parent().remove();
                formBarang.getTotal(); 
            }else{
              return false;
            }           
          });

          $("#checkout").on("click", function() {
            console.log($order_items);
              if ($order_items.length < 1) {
                alert("Anda belum memasukkan item!");
              } else {

                // var totalDibayar = ($('#total_dibayarkan').val() == "" || !isNaN($('#total_dibayarkan').val())) ? parseInt($('#total_dibayarkan').val()) : 0;
                // if(totalDibayar > 0) {
                  //ini diproses
                var request = $.ajax({
                  url: "control/aksiPenjualan.php",
                  method: "POST",
                  data: {
                    "order_items": $order_items,
                    "tanggal":$('#tanggal').val(),
                    "id_toko":$('#id_toko').val(),
                    "sales":$('#sales').val()
                    // "total_dibayarkan":$('#total_dibayarkan').val(),
                    // "total_kembalian":$('#total_kembalian').val()
                  },
                  json: true
                });

                request.success(function(response) {
                    alert("Transaksi Berhasil!");
                    window.open('href','_blank');
                    document.location.reload(true);
                });

                request.fail(function(error) {
                  alert(error);
                });
               



              }
          });
      });
    </script>
</html>