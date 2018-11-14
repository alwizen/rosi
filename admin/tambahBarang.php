<?php
include 'nav.php';
?>

<div class="container">
    <h2 style="text-align:center">Tambah Data Barang</h2><br>
    <form class="form-horizontal" method="POST" action="control/prosesBarang.php?act=input">
        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Nama Barang</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="nama" placeholder="Nama Barang">
            </div>
        </div>
        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Harga</label>
            <div class="col-xs-3">
                <input type="number" class="form-control" name="harga" placeholder="Harga">
            </div>
        </div>

        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Jumlah</label>
            <div class="col-xs-2">
                <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
            </div>
        </div>

        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Sisa</label>
            <div class="col-xs-2">
                <input type="number" class="form-control" name="sisa" placeholder="Sisa">
            </div>
        </div>

         <div class="form-group">
            <label for="date" class="control-label col-xs-4">Tanggal Masuk</label>
            <div class="col-xs-3">
                <input type="date" class="form-control" name="tgl_masuk" placeholder="Telpon">
            </div>
        </div>

         <div class="form-group">
            <label for="input" class="control-label col-xs-4">Kadaluarsa</label>
            <div class="col-xs-3">
                <input type="date" class="form-control" name="kadaluarsa" placeholder="Telpon">
            </div>
        </div>
    <div class="form-group">
        <div class="col-xs-offset-6 col-xs-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="barang.php" class="btn btn-danger">Batal</a>
            <!-- <button type="submit" class="btn btn-danger">Batal</button> -->
        </div>
    </div>
    </form>
</div>
</body>
</html>