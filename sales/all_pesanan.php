<?php
include 'nav.php';
?>

<div class="container">
    <div class="panel panel-primary">
         <div class="panel-heading">Data Barang</div>
        <div class="panel-body">

            <table id="table_id" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="success">Terkirim</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="success">Terkirim</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="success">Terkirim</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="danger">Pending</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="success">Terkirim</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toko Aulia</td>
                        <td>Simbang Kulon</td>
                        <td>Susu Dencow</td>
                        <td>20 pcs</td>
                        <td class="success">Terkirim</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
     </div>
    </div>
    
</body>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>