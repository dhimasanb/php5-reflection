<?php
include_once 'Twitter.php';

$twKhansa = new Twitter("Khansa", "Kamu itu segalanya bagiku :*");
echo "Class dari \$twKhansa adalah : " . get_class($twKhansa) . "\n";
// echo "Methods dari \$twKhansa adalah : " . get_class_methods($twKhansa) . "\n";
echo "Methods dari \$twKhansa adalah : \n";
print_r(get_class_methods($twKhansa));
echo "Parent Class dari \$twKhansa adalah : " . get_parent_class($twKhansa) . "\n";
?>
