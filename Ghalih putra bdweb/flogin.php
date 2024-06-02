<?php
        ini_set('display_errors',0);
        set_time_limit(300);
        error_reporting(0);
?>
<html>
<body style="background:url('green1.jpg');background-repeat: no-repeat; background-size:100%">
<form method=post action="proses_login.php">
<table align=center border=0 width=100% height=500>
<tr align=left>
    <td valign=middle>
        <table align=center border=0 width=20% background="green2.jpg">
                <tr align=left>
                    <td colspan=4 align=right>
                    <a href="index.php" class="plain" style="text-decoration:none;">
                    <font face="verdana" size="2" color=red><b>x</b></font></a>
                    </td>
                </tr>
                <tr>
                    <td><font face="verdana" size="1" color="blue"><b>Username</td>
                    <td><font face="verdana" size="1" color="red"><b>:</td>
                    <td colspan=2><input type="text" name="vuid" size="22" color=silver></td>
                </tr>
                <tr>
                    <td width=50%><font face="verdana" size="1" color="blue"><b>Password</td>
                    <td><font face="verdana" size="1" color="red"><b>:</td>
                    <td colspan=2><input type="password" name="vpwd" size="22"></td>
                </tr>
                <tr>
                    <td colspan=2>&nbsp;</td>
                    <td colspan=2><input type="submit" name="submit" value="LOGIN"></td>
                </tr>
        </table>
    </td>
</tr>
</table>
</form>
</body>
</html>