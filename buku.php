<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM daftarbuku WHERE id=$id";
} else if (isset($_GET['nama'])) {
	$nama = $_GET['nama'];
	$sql = "SELECT * FROM daftarbuku WHERE nama_buku LIKE '%$nama%'";
} else {
	$sql = "SELECT * FROM daftarbuku";
}

$query = mysqli_query($connect, $sql);

$result['buku'] = array();
while ($data = mysqli_fetch_object($query)) {
	array_push($result['buku'], $data);
}

echo json_encode($result);