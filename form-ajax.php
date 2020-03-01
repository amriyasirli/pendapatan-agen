<!DOCTYPE html>
<html>
    <head>
        <title>HITUNG PENDAPATAN AGEN</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h2>Hitung Pendapatan Agen</h2>
            <form action="hitung.php" method="post">
                <div class="form-group">
                    <input id="kode" class="form-control" type="text" name="kode" onkeyup="isi_otomatis()" placeholder="Masukkan Kode Agen">
                </div>
                <div class="form-group">
                    <input id="nama" class="form-control" type="text" name="nama" readonly>
                </div>
                <div class="form-group">
                    <select id="level" class="form-control" name="level" readonly>
                        <option>Level</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea id="alamat" class="form-control" name="alamat" rows="3" readonly></textarea>
                </div>
                <div class="form-group">
                    <input id="email" class="form-control" type="email" name="email" readonly>
                </div>
                <div class="form-group">
                    <input id="jumlah_p" class="form-control" type="jumlah_p" name="jumlah_p" placeholder="Masukkan Jumlah Penjualan" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block mb-3" name="hitung">Hitung</button>
                </div>
            </form>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- dibawah ini merupakan skrip unuk menjalankan fungsi jquery dengan ajax,
        jquery merupakan salahsatu library javascript dalam pembuatan website -->
        <script type="text/javascript">
            function isi_otomatis(){
                var kode = $("#kode").val();
                $.ajax({
                    url: 'proses-ajax.php',
                    data:"kode="+kode ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#level').val(obj.level);
                    $('#alamat').val(obj.alamat);
                    $('#email').val(obj.email);
                });
            }
        </script>
    </body>
</html>

