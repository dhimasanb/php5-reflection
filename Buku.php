<?php
abstract class Tulisan { }
interface publishable { }
interface printable { }
class Buku extends Tulisan implements publishable, printable {
    private $judul;
    private $penulis;
    public function __construct($judul = "Belum ada judul", Penulis $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function __toString() {
        return "Judul buku : " . $this->judul . "\n"
              . "Penulis    : " . $this->penulis->nama() . "\n"
              . "Alamat     : " . $this->penulis->alamat() . "\n";
    }
}
?>
