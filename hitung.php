<?php
//panggil database
include_once("koneksi.php");

if(isset($_POST['hitung'])) {	
	$kode = mysqli_real_escape_string($mysqli, $_POST['kode']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$level = mysqli_real_escape_string($mysqli, $_POST['level']);
	$jumlah_p = mysqli_real_escape_string($mysqli, $_POST['jumlah_p']);
        
    // lakukan if percabangan untuk menntukan hasil dari komisi yang di dapat
    if(!empty($kode) || !empty($nama) || !empty($level) || !empty($alamat) || !empty($email)) {
				
		if($level=="I" && $jumlah_p < 10)
        {
            $komisi= 1000000;
        }
        if($level=="I" && $jumlah_p >= 10 && $jumlah_p < 20 )
        {
            $komisi= 2000000;
        }
        if($level=="I" && $jumlah_p >= 21)
        {
            $komisi= 3000000;
        }
        if($level=="II" && $jumlah_p < 10)
        {
            $komisi= 1500000;
        }
        if($level=="II" && $jumlah_p >= 10 && $jumlah_p < 20 )
        {
            $komisi= 2500000;
        }
        if($level=="II" && $jumlah_p >= 20)
        {
            $komisi= 3500000;
        }
        if($level=="III" && $jumlah_p < 10)
        {
            $komisi= 1800000;
        }
        if($level=="III" &&$jumlah_p >= 10 && $jumlah_p < 20 )
        {
            $komisi= 2800000;
        }
        if($level=="III" && $jumlah_p >= 20)
        {
            $komisi= 3800000;
        }
        if($level=="IV" && $jumlah_p < 10)
        {
            $komisi= 2000000;
        }
        if($level=="IV" && $jumlah_p >= 10 && $jumlah_p < 20 )
        {
            $komisi= 3000000;
        }
        if($level=="IV" && $jumlah_p >= 20)
        {
            $komisi= 4000000;
		}
		
		//simpan ke database
		$result = mysqli_query($mysqli, "UPDATE tbl_agen SET kode='$kode',nama='$nama',level='$level', jumlah_p='$jumlah_p', komisi='$komisi' WHERE kode=$kode");
		header("location: index.php");
	}
	if(empty($kode) || empty($nama) || empty($level) || empty($alamat) || !empty($email))
    {
        echo "Data tidak lengkap";
        header("location: index.php");
    } else { //jika tidak ada yg kosong maka data akan error
        
        echo "data Gagal di hitung";
    
    }
}
?>
<?php
$kode = $_GET['kode'];

//memanggil data di databae berdasarkan kode/id yang di pilih
$result = mysqli_query($mysqli, "SELECT * FROM tbl_agen WHERE kode=$kode");

while($res = mysqli_fetch_array($result))
{
	$kode = $res['kode'];
	$nama = $res['nama'];
	$level = $res['level'];
	$jumlah_p = $res['jumlah_p'];
	$komisi = $res['komisi'];
}
?>

<html>
	<title>Hitung Pendapatan Agen</title>
	<head></head>
<body>
<h2>FORM HITUNG PENDAPATAN AGEN</h2>
<!-- prosesnya akan diarahkan ke file hitung.php -->
	<form action="hitung.php" method="post">
	<div class="perhitungan">
		<table>
			<tr>
				<td>KODE</td>
				<td><input type="text" name="kode" id="kode" value="<?php echo $kode; ?>" readonly></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama" id="nama" value="<?php echo $nama ?>" readonly></td>
			</tr>
			<tr>
				<td>LEVEL</td>
				<td><input type="text" name="level" id="level" value="<?php echo $level ?>" readonly></td>
			</tr>
			<tr>
				<td>JUMLAH PENJUALAN</td>
				<td><input type="text" name="jumlah_p" id="jumlah_p" Onkeyup="jumlah()"></td>
			</tr>
			<tr>
				<td>KOMISI</td>
				<td><input type="text" name="komisi" id="komisi"></td>
			</tr>
		</table>
	</form>
	</div>
	
	

</body>
</html>