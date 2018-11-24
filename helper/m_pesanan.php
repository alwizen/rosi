<?php 
include '../koneksi.php';
include '../fungsi/rupiah.php';
$id = $_GET['id_pesanan'];

$query = "SELECT 
		ps.kode, 
        ps.tanggal,
        pd.jumlah,
        pd.harga,
        b.nama_barang
		FROM pesanan ps 
		LEFT JOIN pesanan_detail pd ON ps.id_pesanan=pd.id_pesanan
		LEFT JOIN barang b ON pd.id_barang=b.id_barang
		WHERE ps.id_pesanan = " . $id . " 
		ORDER BY ps.kode ASC";

$result = mysqli_query($koneksi, $query);
$data = array();

while ($row = mysqli_fetch_array($result)) {
    $judul = $row['kode'];
    $data[] = array(
        'nama_barang' => $row['nama_barang'],
        'jumlah' => $row['jumlah'],
        'harga' => Rp($row['harga'])
    );

}
echo json_encode(array(
    "data" => $data,
    "judul" => $judul
));
?>
