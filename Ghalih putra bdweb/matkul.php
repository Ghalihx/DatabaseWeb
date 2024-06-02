<body style="background:url('green1.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>
<tr>
<?php include "menu_kiri.php"; ?>

	<td colspan="2">
<!-- ISI -->

<style>
.myTableBg4 { 
  min-width: 260px;
  min-height:200px;
  text-align: center;
  /* background-image:url('green2.jpg'); */
  background-repeat: no-repeat;
  background-position: center center;
  border: 1px solid black;
  }
</style>

<table width=35% border=0 cellspacing=0 cellpadding=1 align=center class="myTableBg4">
<tr>
	<td>

<table width=100% border=0 cellspacing=1 align=center>
<tr bgcolor=black height="21">
	<td align=center width="8%"><font face=calibri size=2 color=white><b>NO</b></font></td>
	<td align=center width="15%"><font face=calibri size=2 color=white><b>kodemk</b></font></td>
	<td align=center><font face=calibri size=2 color=white><b>namamk</b></font></td>
    <td align=center width="15%"><font face=calibri size=2 color=white><b>sks</b></font></td>
	<td align=center width="15%"><font face=calibri size=2 color=white><b>***</b></font></td>

</tr>

<?php

include "koneksi.php";
    
	$query = "SELECT * FROM tbl_matakuliah";   
    $result = mysqli_query($link,$query);
    $i=0;
	while ($data = mysqli_fetch_array($result)) 
		{         
		$i++; 
		?>

<tr valign=middle height=19 >
	<td align=center><font face=calibri size=2 class="yellowblack"><b><?php echo $i;?></b></font></td>
	<td align=center valign=middle>
		<font face=calibri size=2 color=navy><b><u><?php echo $data['kodemk'];?></u></b></font>
	</td>

	<td align=left><font face=verdana size=1 class="yellowblack"><b><?php echo $data['namamk'];?></b></font></td>
    <td align=center><font face=verdana size=1 class="yellowblack"><b><?php echo $data['sks'];?></b></font></td>

	<td align=center>
		<a href="form_editmatkul.php?id=<?php echo $data['kodemk'];?>" style="text-decoration:none">
		<img src="ceklist2.jpg" width="13"></a>&nbsp;
		<a href="form_delmatkul.php?id=<?php echo $data['kodemk'];?>" style="text-decoration:none">
		<img src="delete.jpg" width="13"></a>
	</td>
</tr>

<?php	} ?>

<tr><td>&nbsp;</td></tr>	
<tr valign=middle height=19>
	<td colspan=4>&nbsp;</td>
	<td align="center">
		<a href="form_addmatkul.php" style="text-decoration:none"><img src="plus3.jpg" width="25"></a>
	</td>
</tr>
</table>

</td></tr></table>

<!-- ISI -->
	</td>
</tr>		
<?php include "bawah.php"; ?>
</table>
</body>

