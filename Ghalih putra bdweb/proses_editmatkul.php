<?php
$kodemk = $_POST["vkodemk"];
$namamk = $_POST["vnamamk"];
$sks =  $_POST["vsks"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_matakuliah set kodemk ='$kodemk' , namamk = '$namamk' , sks = '$sks' where kodemk='$kunci'";
$result = mysqli_query($link,$v1);

print("<html><head><meta http-equiv='refresh' content='0 url=matkul.php'></head><body</body></html>");
?>