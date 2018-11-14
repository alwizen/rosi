<?php
include '../../koneksi.php';

$act = $_GET['act'];

if ($act == 'delete') {
    $id_barang = $_GET['id_barang'];
    $row = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang = '$id_barang'");
    header("location:../barang.php");
} elseif ($act == 'input') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sisa = $_POST['sisa'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $kadaluarsa = $_POST['kadaluarsa'];

    mysqli_query($koneksi, "INSERT INTO barang(id_barang, nama, harga, jumlah, sisa, tgl_masuk, kadaluarsa)
    VALUES ('','$nama','$harga','$jumlah','$sisa','$tgl_masuk','$kadaluarsa')");

    echo "<script>alert('Anda telah berhasil .'); window.location = '../barang.php'</script>";

} elseif ($act == 'update') {
    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sisa = $_POST['sisa'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $kadaluarsa = $_POST['kadaluarsa'];

    $sql = "UPDATE barang SET nama='$nama', harga='$harga', jumlah='$jumlah', sisa='$sisa', tgl_masuk='$tgl_masuk', kadaluarsa='$kadaluarsa' WHERE id_barang='$id_barang'";

    if (mysqli_query($koneksi, $sql)) {
        mysqli_close($koneksi);
        echo "<script>alert('Anda telah berhasil .'); window.location = '../barang.php'</script>";
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("gagal");';
        echo '</script>';
    }

}
?>
