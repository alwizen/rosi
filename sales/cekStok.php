<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = "select * from barang";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
echo json_encode(array("stok" => $row['jumlah']));
// print_r($row['stok']) ;
// SELECT
//     b . kd_barang,
//     b . nama_barang,
//     b . harga_beli,
//     b . harga_jual, (SELECT if (SUM(dp . jumlah) IS null,0 , SUM(dp . jumlah)) FROM det_pembelian dp WHERE dp . kd_barang = b . kd_barang) as jml, ((SELECT if (SUM(dp . jumlah) IS null,0 , SUM(dp . jumlah)) FROM det_pembelian dp WHERE dp . kd_barang = b . kd_barang) -(SELECT(if (SUM(dp2 . jumlah) IS null,0 , SUM(dp2 . jumlah)))
//     FROM det_penjualan dp2 WHERE dp2 . kd_barang = b . kd_barang)) as stok
//     FROM `barang ` b
//     WHERE b . kd_barang = " .  $id .  "
//     GROUP BY b . kd_barang ORDER BY `nama_barang ` ASC
?>