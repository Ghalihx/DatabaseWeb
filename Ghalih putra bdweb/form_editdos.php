
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
	$query = "SELECT * FROM tbl_dosen where nid='$cari'";   
    $result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_array($result)) 
		{         
			$nid  =$data['nid'];
			$nama =$data['namados'];
		
		}
?>

<form method=post action="proses_editdos.php">
<table align=center border=0 width=35%>
	<tr>
		<td align="right"><font face="verdana" size="1" color="blue"><b>NID</td>
		<td align="right"><font face="verdana" size="1" color="blue"><b>:</td>
		<td><input type="text" name="vnid" value="<?php echo $nid;?>" color=silver></td>
	</tr>
	<tr>
		<td align="right"><font face="verdana" size="1" color="yellow"><b>NAMA DOSEN</td>
		<td align="right"><font face="verdana" size="1" color="yellow"><b>:</td>
		<td><input type="text" name="vnama" value="<?php echo $nama;?>" color=silver></td>

	</tr>
	<tr>
		<td colspan=2>&nbsp;</td>
		<td colspan=2>
			<input type="submit" name="submit" value="SIMPAN">

			<a href="dosen.php">BATAL</a>
			
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
