<?php
require_once "settings/conection.php";

$nama = $_POST['nama'];
$nomer_hp = $_POST['nomer_hp'];
$kue = $_POST['kue'];
$jumlah = $_POST['jumlah'];
$bayar = $_POST['bayar'];
$catatan = $_POST['catatan'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = $date->format('Y-m-d');
    $date = new \DateTime('today');

if ($kue == "blackforest") {
    $total = $jumlah * 200000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
} elseif ($kue == "redvelvet") {
    $total = $jumlah * 190000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
} elseif ($kue == "lapislegit") {
    $total = $jumlah * 150000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
} elseif ($kue == "bikaambon") {
    $total = $jumlah * 125000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
} elseif ($kue == "rotitawar") {
    $total = $jumlah * 40000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
} elseif ($kue == "puding") {
    $total = $jumlah * 160000;
    $connection->query("INSERT INTO `orders`(`id`, `nama_pemesan`, `nomer_hp`, `kue`, `jumlah`, `total`,`pembayaran`, `catatan`, `tanggal_pesanan`) 
VALUES (NULL,'$nama','$nomer_hp','$kue','$jumlah','$total',NULL,'$catatan','$tanggal')");
    header("Location: total.php?nama=$nama");
}
