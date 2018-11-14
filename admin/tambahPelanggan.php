<?php
include 'nav.php';
?>

<div class="container">
    <h2 style="text-align:center">Tambah Data Pelanggan</h2><br>
    <form class="form-horizontal" method="POST" action="control/prosesPelanggan.php?act=input">
        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Nama Toko</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="nama_toko" placeholder="Nama Toko">
            </div>
        </div>
        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Nama Pemilik</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="pemilik" placeholder="Pemilik">
            </div>
        </div>

        <div class="form-group">
            <label for="input" class="control-label col-xs-4">Alamat</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>
        </div>

        <div class="form-group">
            <label for="input" class="control-label col-xs-4">No Telpon</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="no_tlp" placeholder="Telpon">
            </div>
        </div>
    <div class="form-group">
        <div class="col-xs-offset-6 col-xs-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-danger">Batal</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>