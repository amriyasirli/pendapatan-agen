<?php
//panggil database
include_once("koneksi.php");

//panggil data di tabel tbl_agen untuk di tampilkan di tabel di halaman utama
$result = mysqli_query($mysqli, "SELECT * FROM tbl_agen ORDER BY kode DESC"); //DESC = mengurutkan data berdasarkan kode/id 
?>
<!doctype html>
<html lang="en">
	<title>APLIKASI DATA AGEN</title>
	<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<h2>Tambah Data Agen</h2>
		<form action="tambah.php" method="post">
			<div class="form-group">
				<input id="kode" class="form-control" type="text" name="kode" placeholder="Masukkan Kode" required>
			</div>
			<div class="form-group">
				<input id="nama" class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required>
			</div>
			<div class="form-group">
				<select id="level" class="form-control" name="level" required>
					<option>-- Pilih Level --</option>
					<option>I</option>
					<option>II</option>
					<option>III</option>
					<option>IV</option>
				</select>
			</div>
			<div class="form-group">
				<textarea id="alamat" class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
			</div>
			<div class="form-group">
				<input id="email" class="form-control" type="email" name="email" placeholder="E-mail" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block mb-3" name="submit">Simpan</button>
			</div>
		</form>
	</div>
		
	<div class="col-md-9">
	<a href="form-ajax.php" class="btn btn-secondary mb-3 mt-3">Hitung Pendapatan Agen</a></td>
		<table class="table table-hover">

		<tr bgcolor='#ffff8'>
			<td>KODE</td>
			<td>NAMA</td>
			<td>LEVEL</td>
			<td>ALAMAT</td>
			<td>EMAIL</td>
			<td>JUMLAH PENJUALAN</td>
			<td>KOMISI</td>
			<td>AKSI</td>
		</tr>
		<?php
		//perintah looping/perulangan untuk ditampilkan di tabel pada halaman utama
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['kode']."</td>";
			echo "<td>".$res['nama']."</td>";
			echo "<td>".$res['level']."</td>";	
			echo "<td>".$res['alamat']."</td>";
			echo "<td>".$res['email']."</td>";
			if($res['komisi']==0){
				echo "<td><div class='badge badge-secondary'>belum dihitung</div></td>";
			}else {
				echo "<td>".$res['jumlah_p']." Unit</td>";
			}
			
			if($res['komisi']==0){
				echo "<td><div class='badge badge-secondary'>belum dihitung</div></td>";
			}else {
				echo "<td>Rp. ".number_format($res['komisi'], 0,',','.')."</td>";
			}
			//script dibawah perhatikan "kode" sesuaikan dengan id atau primary key di database
			echo "<td><a class='badge badge-info' href=\"edit.php?kode=$res[kode]\">Edit</a> | <a class='badge badge-danger' href=\"hapus.php?kode=$res[kode]\" onClick=\"return confirm('Apakah Kamu Yakin Hapus Data Ini ?')\">Hapus</a></td>";		
		}
		?>
		</table>
	
	</div>
</div>
	<footer class="footer">
		<div class="container-fluid">
			<div class="copyright ml-auto">
				PTIK'16&copy;<?php echo date('Y');?>, <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.facebook.com/amri_yasirli1">Yassirli Amri</a>
			</div>				
		</div>
	</footer>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>