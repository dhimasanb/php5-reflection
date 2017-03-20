<?php
include_once 'Penulis.php';
include_once 'Buku.php';

$dhimas = new Penulis ("Dhimas Ganteng", "Jakarta");
$buku = new Buku ("Rumah Tanggaku, Surgaku", $dhimas);
$reflector = new ReflectionClass($buku);
echo $reflector->getName() . "\n";
echo $reflector->getParentClass()->getName() . "\n";
var_dump($reflector->getInterfaceNames()); // cek interfaces
var_dump($reflector->getMethods()); // cek semua method
$constructors = $reflector->getConstructor(); // cek constructors
var_dump($constructors->getParameters()); // cek parameter constructors
?>
