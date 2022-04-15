<?php
include 'koneksi.php';
$kdlama = $_GET['kd'];
$kd = $_POST['kd'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$tl = $_POST['tl'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$penyakit = $_POST['penyakit'];
$rincian = $_POST['rincian'];

$query = mysqli_query($koneksi, "UPDATE rumahsakit SET kd='$kd', nama='$nama', tgl='$tgl', tl='$tl', kelamin='$kelamin', alamat='$alamat', usia='$usia', penyakit='$penyakit', rincian='$rincian' WHERE kd='$kdlama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: view.php");
}else{
    echo "Gagagl Update";
}

?>