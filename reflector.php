<?php
include_once 'Penulis.php';
include_once 'Buku.php';

$dhimas = new Penulis ("Dhimas Ganteng", "Jakarta");
$buku = new Buku ("Rumah Tanggaku, Surgaku", $dhimas);
echo $buku;
?>
