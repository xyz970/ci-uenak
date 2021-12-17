<?php

require_once "settings/conection.php";

$nama = $_POST['nama'];
$bayar = $_POST['bayar'];

// echo $nama;
$connection->query("UPDATE `orders` SET `pembayaran` = '$bayar' WHERE `orders`.`nama_pemesan` = '$nama'");

header("Location: index.html");
