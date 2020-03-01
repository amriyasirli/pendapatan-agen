<html>
<head>
	<title>Tambah Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
<?php
//including the database connection file
include_once("koneksi.php");

if(isset($_POST['submit'])) {	
	$kode = mysqli_real_escape_string($mysqli, $_POST['kode']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$level = mysqli_real_escape_string($mysqli, $_POST['level']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
    if(!empty($kode) || !empty($nama) || !empty($level) || !empty($alamat) || !empty($email)) {
				
		
        // if($golongan="I" && $masa_kerja <= 10)
        // {
        //     $gaji= 1000000;
        // }
        // if($golongan="I" && $masa_kerja >= 11 || $masa_kerja <= 20)
        // {
        //     $gaji= 1500000;
        // }
        // if($golongan="I" && $masa_kerja >= 21 || $masa_kerja <= 30)
        // {
        //     $gaji= 2000000;
        // }
        // if($golongan="I" && $masa_kerja > 30)
        // {
        //     $gaji= 2500000;
        // }
    
        $result = mysqli_query($mysqli, "INSERT INTO tbl_agen(kode,nama,level,alamat,email) VALUES('$kode','$nama','$level', '$alamat', '$email')");
        
        header("location: index.php");
        
    }
    if(empty($kode) || empty($nama) || empty($level) || empty($alamat) || !empty($email))
    {
        echo "Data tidak lengkap";
        header("location: index.php");
    }
     else {
        echo "Data gagal di input";
    }
}
?>
</body>
</html>
