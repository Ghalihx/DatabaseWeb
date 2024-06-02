<?php
$nim = $_POST["vnim"];
$nama = $_POST["vnamamhs"];
$tlp = $_POST["vtlp"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_mhs set nim ='$nim' , namamhs = '$nama' , phone = '$tlp'  where nim='$kunci'";
$result = mysqli_query($link,$v1);

print("<html><head><meta http-equiv='refresh' content='0 url=mahasiswa.php'></head><body</body></html>");
?>