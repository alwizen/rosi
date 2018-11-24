<?php

include '../../koneksi.php';
$order_items = $_POST["order_items"];
$sales = $_POST['sales'];
$id_toko = $_POST['id_toko'];
$tanggal = $_POST['tanggal'];

$nota = strtoupper("pj-");
$acak = strtoupper(substr(uniqid(md5(time())), 0, 5));
$unik = $nota . $acak;

$order = mysqli_query($koneksi, "INSERT INTO pesanan (kode, sales, id_toko, tanggal) VALUES ('$unik', '$sales', '$id_toko', '$tanggal')");
$order_id = mysqli_insert_id($koneksi);

foreach ($order_items as $item) {
    mysqli_query($koneksi, "INSERT INTO pesanan_detail (id_pesanan, id_barang, harga, jumlah) VALUES ($order_id, " . (int)$item["kd_barang"] . ", " . (int)$item["harga"] . ", " . (int)$item["jumlah"] . ")");
}

echo "success";