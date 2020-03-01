<?php
   //panggil database
   include_once("koneksi.php");
   
   if(isset($_POST['update'])) {	
   	$kode = mysqli_real_escape_string($mysqli, $_POST['kode']);
   	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
   	$level = mysqli_real_escape_string($mysqli, $_POST['level']);
   	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
   	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
           
       //jika ada data yang kosong pada textbox maka datanya tidak akan jalan
       if(empty($kode) || empty($nama) || empty($level) || empty($alamat) || empty($email)) {
   				
   		echo "data masih belum terisi";
   		
   		
   	} else { //jika tidak ada yg kosong maka data akan di update di database
           $result = mysqli_query($mysqli, "UPDATE tbl_agen SET kode='$kode',nama='$nama',level='$level', alamat='$alamat', email='$email' WHERE kode=$kode");
           
       header("location: index.php");
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
   	$alamat = $res['alamat'];
   	$email = $res['email'];
   }
   ?>
<html>
   <!-- Form edit ini berfungsi untuk mengedit data yang sudah ada di database -->
   <title>Edit Data Agen</title>
   <head>
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   </head>
   <body>
   <div class="container-fluid">
	<div class="row">
		<div class="col-md-6 m-auto">
			<h2>Edit Data Agen</h2>
		<form action="edit.php" method="post">
			<div class="form-group">
				<input id="kode" class="form-control" type="text" name="kode" value="<?php echo $kode; ?>" placeholder="Masukkan Kode" required>
			</div>
			<div class="form-group">
				<input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Masukkan Nama" required>
			</div>
			<div class="form-group">
				<select id="level" class="form-control" name="level" required>
					<option><?php echo $level; ?></option>
					<option>I</option>
					<option>II</option>
					<option>III</option>
					<option>IV</option>
				</select>
			</div>
			<div class="form-group">
				<textarea id="alamat" class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat" required><?php echo $alamat; ?></textarea>
			</div>
			<div class="form-group">
				<input id="email" class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block mb-3" name="update">Update</button>
			</div>
		</form>
	</div>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>