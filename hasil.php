<?php
echo "<br />";
echo "Hasil Perhitungan Tunjangan Gaji anda sebagai berikut !";
echo "<br />";
$nama = $_POST["nama"];
$gaji_pokok = $_POST["gaji_pokok"];
$jumlah_anak = $_POST["jumlah_anak"];

echo "Nama : $nama ";
echo "<br />";
echo "Gaji pokok : Rp. $gaji_pokok";
echo "<br />";
echo "Jumlah anak : $jumlah_anak ";
echo "<br />";


if ($jumlah_anak <= 3 and $jumlah_anak > 0) {
    $tunjangan = $jumlah_anak * (10 / 100) * $gaji_pokok;
} elseif ($jumlah_anak > 3) {
    $tunjangan = 3 * (10 / 100) * $gaji_pokok;
} else {
    $tunjangan = 0;
}

echo "Tunjangan Gaji : Rp. $tunjangan";
