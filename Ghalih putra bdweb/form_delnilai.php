<body style="background:url('green1.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>
<tr>
<?php include "menu_kiri.php"; ?>
        <td colspan="2">
            <!-- ISI -->
            <?php
            if(isset($_GET['id'])) 
               
                include "koneksi.php";
                
            
                $nim = $_GET["id"];

                $query = "SELECT * FROM tbl_nilai WHERE nim='$nim'";
                $result = mysqli_query($link, $query);
                $data = mysqli_fetch_array($result);
                $nama = $data['nim'];
                $kodemk = $data['kodemk'];
            ?>
            <form method="post" action="proses_delnilai.php">
                <table align="center" border="0" width="35%">
                    <tr>
                        <td colspan="3">
                        	
		
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="2" color="blue"><b>NIM</b></font></td>
                        <td align="right"><font face="verdana" size="2" color="blue"><b>:</b></font></td>
                        <td><?php echo $nim; ?></td>
                    </tr>
                    <tr>
                        <td align="right"><font face="verdana" size="2" color="yellow"><b>Kode MK</b></font></td>
                        <td align="right"><font face="verdana" size="2" color="yellow"><b>:</b></font></td>
                        <td><?php echo $kodemk; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            	<font size="3" color="black" face="calibri"><b>YAKIN AKAN DIHAPUS ???</b></font>
                            <input type="hidden" name="vnim" value="<?php echo $nim; ?>">
                            <input type="hidden" name="vkodemk" value="<?php echo $kodemk; ?>">
                            <input type="submit" name="submit" value="HAPUS">
                            <a href="nilai.php">BATAL</a>
                        </td>
                    </tr>
                </table>
            </form>
    
            <!-- ISI -->
        </td>
    </tr>		
    <?php include "bawah.php"; ?>
</table>
</body>