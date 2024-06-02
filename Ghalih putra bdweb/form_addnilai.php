<body style="background:url('green1.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>
<tr>
<?php include "menu_kiri.php"; ?>

	<td colspan="2">
<!-- ISI -->

<form method=post action="proses_addnilai.php">
<table align=center border=0 width=35%>
            <tr>
            <td align="right"><font face="verdana" size="1" color="blue"><b>NIM</b></font></td>
            <td align="right"><font face="verdana" size="1" color="blue"><b>:</b></font></td>
            <td><input type="text" name="vnim" required></td>
             </tr>
              <tr>
             <td align="right"><font face="verdana" size="1" color="yellow"><b>Tugas</b></font></td>
            <td align="right"><font face="verdana" size="1" color="yellow"><b>:</b></font></td>
                  <td><input type="text" name="vtugas" required></td>
               </tr>
                    <tr>
       <td align="right"><font face="verdana" size="1" color="cyan"><b>UTS</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vuts" required></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>UAS</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vuas" required></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>Kode MK</b></font></td>
                        <td align="right"><font face="verdana" size="1" color="cyan"><b>:</b></font></td>
                        <td><input type="text" name="vkodemk" required></td>
                    </tr>
                 
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="2"><input type="submit" name="submit" value="SIMPAN"></td>
                    </tr>
                    </table>
</form>

<!-- ISI -->
	</td>
</tr>		
<?php include "bawah.php"; ?>
</table>
</body>