<?php
$nim = $_POST["vnim"];
$tugas = $_POST["vtugas"];
$uts = $_POST["vuts"];
$uas = $_POST["vuas"];
$kodemk = $_POST['vkodemk'];


$akhir = ($tugas + $uts + $uas) / 3;

if ($akhir >= 80) {
    $hm = 'A';
} elseif ($akhir >= 70) {
    $hm = 'B';
} elseif ($akhir >= 60) {
    $hm = 'C';
} elseif ($akhir >= 50) {
    $hm = 'D';
} else {
    $hm = 'E';
}

if ($hm == 'A') {
    $status = 'Lulus Sangat Memuaskan';
} elseif ($hm == 'B') {
    $status = 'Lulus Memuaskan';
} elseif ($hm == 'C') {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}



include "koneksi.php";

$v1 = "insert into tbl_nilai values ('$nim', '$tugas', '$uts', '$uas', '$akhir', '$kodemk', '$hm', '$status')";
$result = mysqli_query($link,$v1);

print("<html><head><meta http-equiv='refresh' content='0 url=nilai.php'></head><body</body></html>");
?>