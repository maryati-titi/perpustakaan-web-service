<?php
include 'koneksi2.php';
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id_buku'];
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$tanggal = $_POST['tanggal'];

	$sql = "insert into daftarpeminjaman (nama_peminjam, id, nik, tanggal)  values('$nama','$id','$nik','$tanggal')";

	$result = pg_query($connect2, $sql);

	if ($result) {
		$response = [
			'error' => false,
			'data' => "Berhasil disimpan"
		];
	} else {
		$response = [
			'error' => true,
			'data' => "Gagal disimpan"
		];
	}
	echo json_encode($response);
}
