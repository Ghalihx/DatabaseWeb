<?php
$nim = $_POST["vnim"];
$nama = $_POST["vnama"];
$tlp = $_POST["vtlp"];

include "koneksi.php";

$v1 = "insert into tbl_mhs values ('$nim' , '$nama' ,'$tlp')";
$result = mysqli_query($link,$v1);

print("<html><head><meta http-equiv='refresh' content='0 url=mahasiswa.php'></head><body</body></html>");
?>