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
	$query = "SELECT * FROM tbl_matakuliah where kodemk='$cari'";   
    $result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_array($result)) 
		{         
			$kodemk  =$data['kodemk'];
			$namamk =$data['namamk'];
			$sks  =$data['sks'];
		}
?>
<br><br>
<table align=center border=0 width=40% cellspacing="1">
	<tr>
		<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>kodemk</td>
		<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
		<td><font size="2" color="blue"><b><?php echo $kodemk;?></b></font></td>
	</tr>
	<tr>
		<td align="right"><font face="verdana" size="2" color="yellow"><b>namamk</td>
		<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
		<td><font size="2" color="blue"><b><?php echo $namamk;?></b></font></td>
	</tr>
	<tr>
		<td align="right"><font face="verdana" size="2" color="yellow"><b>sks</td>
		<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
		<td><font size="2" color="blue"><b><?php echo $sks;?></b></font></td>
	</tr>
	<tr>
		<td colspan=3 align="center">
			<br>	
			<font size="3" color="black" face="calibri"><b>YAKIN AKAN DIHAPUS ???</b></font><br>
			<a href="proses_delmk.php?id=<?php echo $kodemk;?>" style="text-decoration:none">
				<font color="darkred" face="calibri" size="4"><b>YA</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="matkul.php" style="text-decoration:none">
				<font color="lightgreen" face="calibri" size="4"><b>BATAL</b></font></a>

		</td>
	</tr>
</table>
<input type="hidden" name="kunci" value="<?php echo $cari;?>">

<!-- ISI -->
	</td>
</tr>		
<?php include "bawah.php"; ?>
</table>
</body>