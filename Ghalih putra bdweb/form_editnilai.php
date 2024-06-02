
<body style="background:url('green1.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>
<tr>
<?php include "menu_kiri.php"; ?>

	<td colspan="2">
<!-- ISI -->

<?php

include "koneksi.php";

    $cari = $_GET["id"];
	$query = "SELECT * FROM tbl_nilai where nim='$cari'";   
    $result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_array($result)) 
    	{         
			$nim = $data["nim"];
            $tugas = $data["tugas"];
            $uts = $data["uts"];
              $uas = $data["uas"];
             $kodemk = $data['kodemk'];

		}
?>

<form method=post action="proses_editnilai.php">
<table align=center border=0 width=35%>
<tr>
                        <td align="right"><font face="verdana" size="1" color="blue"><b>NIM</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="blue"><b>:</b></font></td>
                        <td><input type="text" name="vnim" value="<?php echo $nim; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="yellow"><b>Tugas</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="yellow"><b>:</b></font></td>
                        <td><input type="text" name="vtugas" value="<?php echo $tugas; ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>UTS</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vuts" value="<?php echo $uts; ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>UAS</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vuas" value="<?php echo $uas; ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>Kode MK</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vkodemk" value="<?php echo $kodemk; ?>" readonly></td>
                    </tr>
                    
		<td colspan=2>&nbsp;</td>
		<td colspan=2>
			<input type="submit" name="submit" value="SIMPAN">

			<a href="nilai.php">BATAL</a>
			
		</td>
	</tr>
</table>
<input type="hidden" name="kunci" value="<?php echo $cari;?>">
</form>


<!-- ISI -->
	</td>
</tr>		
<?php include "bawah.php"; ?>
</table>
</body>
