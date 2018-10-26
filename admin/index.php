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
                        <th>Nama Barang</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sosis</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sosis</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sosis</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sosis</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sosis</td>
                        <td>300</td>
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