<?php
$nim = $_POST["vnim"];
$nid = $_POST["vnid"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_dopem set nim ='$nim' , nid = '$nid' where nim='$kunci'";
$result = mysqli_query($link,$v1);

print("<html><head><meta http-equiv='refresh' content='0 url=dopem.php'></head><body</body></html>");
?>