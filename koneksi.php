<?php
$host="localhost"; // untuk menhbungkan pada localhost atau browser atau menuju ke website
$username="root"; // yg akan terhubung ke database dilakukan root melalui xampp
$password=""; 
$databasename="akademikkk"; // untuk menyambungkan nama database yg akan dihubungkan ke dlam phpmyadmin
$con=@mysqli_connect($host,$username,$password,$databasename); // jika database tdk terbaca bagian ini akan melakukan conecting ke database
if (!$con) {
 echo "Error: " . mysqli_connect_error();
exit();
}
?>
