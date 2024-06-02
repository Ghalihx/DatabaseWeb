<?php

$nim = $_POST["vnim"];
$tugas = $_POST["vtugas"];
$uts = $_POST["vuts"];
$uas = $_POST["vuas"];
$kodemk = $_POST["vkodemk"];

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

$query = "UPDATE tbl_nilai SET 
 tugas = '$tugas', 
uts = '$uts', 
uas = '$uas', 
akhir = '$akhir', 
 hm = '$hm', 
            status = '$status' 
          WHERE nim = '$nim' AND kodemk = '$kodemk'";


if (mysqli_query($link, $query)) {

    echo "<html><head><meta http-equiv='refresh' content='0;url=nilai.php'></head><body></body></html>";
} else {

    echo "Error: " . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>
