<?php
include_once 'Penulis.php';
include_once 'Buku.php';
$penulis = new Penulis();
$buku = new Buku("Belum ada judul", $penulis);
echo $buku;
?>
