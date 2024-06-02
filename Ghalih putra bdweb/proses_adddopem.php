<?php

$nim = $_POST["vnim"];
$nid = $_POST["vnid"];

include "koneksi.php";

$v1 = "insert into tbl_dopem values ('$nim','$nid')";
$result = mysqli_query($link,$v1);

//echo $v1;
print("<html><head><meta http-equiv='refresh' content='0 url=dopem.php'></head><body</body></html>");
?>