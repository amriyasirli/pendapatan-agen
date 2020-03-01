<?php
//panggil koneksi database
include_once("koneksi.php");
$kode = $_GET['kode'];
$query = mysqli_query($mysqli, "select * from tbl_agen where kode='$kode'");
$agen = mysqli_fetch_array($query);
//agar bisa kita gunakan untuk menampilkan data otomatis pada perhitungan pendapatan agen
$data = array(
            'kode'       =>  $agen['kode'],
            'nama'      =>  $agen['nama'],
            'level'  =>  $agen['level'],
            'alamat'=>  $agen['alamat'],
            'email'=>  $agen['email'],);
 echo json_encode($data); //data harus dikonversi terlebih dahulu kedalam bentuk JSON agar bisa di proses oleh AJAX di file Form-ajax.php
?>