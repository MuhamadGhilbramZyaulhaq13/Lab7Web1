<?php
$hasil = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = strtolower($_POST['pekerjaan']); 

   
    $lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($lahir)->y;

    
    if ($pekerjaan == "programmer") {
        $gaji = 8000000;
    } elseif ($pekerjaan == "desainer") {
        $gaji = 6000000;
    } elseif ($pekerjaan == "guru") {
        $gaji = 5000000;
    } else {
        $gaji = 0; 
    }

    $hasil = "
        <h3>Hasil Output</h3>
        Nama: $nama <br>
        Umur: $umur tahun <br>
        Pekerjaan: $pekerjaan <br>
        Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<h2>Form Input</h2>
<form method="post">
    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tgl_lahir" required><br><br>

    Pekerjaan (ketik saja, contoh: Programmer):<br>
    <input type="text" name="pekerjaan" required><br><br>

    <button type="submit" name="submit">Proses</button>
</form>

<hr>
<?php echo $hasil; ?>

</body>
</html>
