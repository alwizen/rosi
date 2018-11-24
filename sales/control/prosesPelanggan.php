<?php
include '../../koneksi.php';

$act = $_GET['act'];

if ($act == 'delete') {
    $id_toko = $_GET['id_toko'];
    $row = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id_toko = '$id_toko'");
    header("location:../user.php");
} elseif ($act == 'input') {
    $nama_toko  = $_POST['nama_toko'];
    $pemilik    = $_POST['pemilik'];
    $alamat     = $_POST['alamat'];
    $no_tlp     = $_POST['no_tlp'];

    mysqli_query($koneksi, "INSERT INTO pelanggan(id_toko, nama_toko, pemilik, alamat, no_tlp)
    VALUES ('','$nama_toko','$pemilik','$alamat','$no_tlp')");

    echo "<script>alert('Anda telah berhasil .'); window.location = '../pelanggan.php'</script>";

} elseif ($act == 'update') {
    $id_toko = $_POST['id_toko'];
    $nama_toko = $_POST['nama_toko'];
    $pemilik = $_POST['pemilik'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

    $sql = "UPDATE pelanggan SET nama_toko='$nama_toko', pemilik='$pemilik', alamat='$alamat', no_tlp='$no_tlp' WHERE id_toko='$id_toko'";

    if (mysqli_query($koneksi, $sql)) {
        mysqli_close($koneksi);
        echo "<script>alert('Anda telah berhasil .'); window.location = '../pelanggan.php'</script>";
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("gagal");';
        echo '</script>';
    }

}
?>
