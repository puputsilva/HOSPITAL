<?php
include 'koneksi.php';

$kd = $_POST['kd'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$tl = $_POST['tl'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$penyakit = $_POST['penyakit'];
$rincian = $_POST['rincian'];

$query = mysqli_query($koneksi, "INSERT INTO rumahsakit (kd, nama, tgl, tl, kelamin, alamat, usia, penyakit, rincian) VALUES ('$kd', '$nama', '$tgl', '$tl', '$kelamin', '$alamat', '$usia', '$penyakit','$rincian')");

if($query){
    header("Location: view.php");
}else{
    echo "Gagal tambah data";
}
?>