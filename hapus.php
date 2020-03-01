<?php
//panggil database
include("koneksi.php");

//ambil data berdasarkan idnya
$kode = $_GET['kode'];

//perintah untuk hapus data di database
$result = mysqli_query($mysqli, "DELETE FROM tbl_agen WHERE kode=$kode");

//setelah data dihapus kita akan di kembalikan ke halaman utama lagi
header("Location:index.php");
?>

