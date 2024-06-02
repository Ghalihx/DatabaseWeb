<?php
if(isset($_POST['vnim']) && isset($_POST['vkodemk'])) {

    include "koneksi.php";

    $nim = $_POST["vnim"];
    $kodemk = $_POST["vkodemk"];
    $query = "DELETE FROM tbl_nilai WHERE nim='$nim' AND kodemk='$kodemk'";

    if (mysqli_query($link, $query)) {
     
        header("Location: nilai.php");
        exit();
    mysqli_close($link);
} 
}
?>
