<?php 

$nama = $_GET['nama'];
$matkul = $_GET['Matkul'];
$tugas = $_GET['tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$total_nilai = ($tugas + $uts + $uas) /3;


if($total_nilai > 75){
   $keterangan = "LULUS";
} else {
    $keterangan = "TIDAK LULUS";
}
?>