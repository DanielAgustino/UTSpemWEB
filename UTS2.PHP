<!DOCTYPE html>
<html>
<head>
    <title>Input Data Klasemen Piala Asia U-23 Qatar Group B</title>
</head>
<body>

<?php

function simpanData($data) {
    $file = 'db.html';
    file_put_contents($file, $data, FILE_APPEND); 
}


function tampilkanData() {
    $file = 'db.html';
    if (file_exists($file)) {
        $data = file_get_contents($file);
        echo $data; 
    } else {
        echo "Belum ada data tersimpan.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $namaNegara = $_POST['nama_negara'];
    $jumlahPertandingan = $_POST['jumlah_pertandingan'];
    $jumlahMenang = $_POST['jumlah_menang'];
    $jumlahSeri = $_POST['jumlah_seri'];
    $jumlahKalah = $_POST['jumlah_kalah'];
    $jumlahPoin = $_POST['jumlah_poin'];
    $namaOperator = $_POST['nama_operator'];
    $nimMahasiswa = $_POST['nim_mahasiswa'];

   
    $dataBaru = "<tr><td>$namaOperator / $nimMahasiswa</td><td>$namaNegara</td><td>$jumlahPertandingan</td><td>$jumlahMenang</td><td>$jumlahSeri</td><td>$jumlahKalah</td><td>$jumlahPoin.0</td></tr>";

   
    simpanData($dataBaru);
}
?>

<h2>Input Data Klasemen Piala Asia U-23 Qatar Group B</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nama_negara">Nama Negara:</label>
    <select id="nama_negara" name="nama_negara">
        <option value="Korea Selatan U-23">Korea Selatan U-23</option>
        <option value="Jepang U-23">Jepang U-23</option>
        <option value="Tiongkok U-23">Tiongkok U-23</option>
        <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
    </select><br><br>
    <label for="jumlah_pertandingan">Jumlah Pertandingan:</label>
    <input type="number" id="jumlah_pertandingan" name="jumlah_pertandingan"><br><br>
    <label for="jumlah_menang">Jumlah Menang:</label>
    <input type="number" id="jumlah_menang" name="jumlah_menang"><br><br>
    <label for="jumlah_seri">Jumlah Seri:</label>
    <input type="number" id="jumlah_seri" name="jumlah_seri"><br><br>
    <label for="jumlah_kalah">Jumlah Kalah:</label>
    <input type="number" id="jumlah_kalah" name="jumlah_kalah"><br><br>
    <label for="jumlah_poin">Jumlah Poin:</label>
    <input type="number" id="jumlah_poin" name="jumlah_poin"><br><br>
    <label for="nama_operator">Nama Operator:</label>
    <input type="text" id="nama_operator" name="nama_operator"><br><br>
    <label for="nim_mahasiswa">NIM Mahasiswa:</label>
    <input type="text" id="nim_mahasiswa" name="nim_mahasiswa"><br><br>
    <input type="submit" value="Submit">
</form>

<hr>

<h2>Data Group B Piala Asia Qatar U-23</h2>
<p>Per <?php echo date("d M Y H:i:s"); ?> (Waktu dan Jam Sekarang)</p>

<table border="1">
    <tr>
        <th>Nama Operator/NIM</th>
        <th>Negara</th>
        <th>Pertandingan</th>
        <th>Menang</th>
        <th>Seri</th>
        <th>Kalah</th>
        <th>Poin</th>
    </tr>
    <?php tampilkanData(); ?>
</table>

</body>
</html>
