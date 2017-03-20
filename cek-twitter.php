<?php
include_once 'Twitter.php';

$twitter = new Twitter ("Dhimas", "Ganteng itu adalah anugerah");
echo "Akun Twitter : " . $twitter->username() . "\n";
echo "Tweet : " . $twitter->tweet() . "\n";

?>
