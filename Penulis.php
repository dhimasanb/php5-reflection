<?php
class Penulis {
  private $nama;
  private $alamat;

  public function __construct($nama="Seseorang", $alamat="Alamat Penulis") {
    $this->nama = $nama;
    $this->alamat = $alamat;
  }

  public function nama() {
    return $this->nama;
  }

  public function alamat() {
    return $this->alamat;
  }
}

?>
