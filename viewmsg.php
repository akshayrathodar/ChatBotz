<?php
include 'nav.php';
?>

<center>
<table>
	<tr>
    	<td><font size="+2" color="#fff"><u><b>Messages From :</b></u></font></td>
    </tr>
    <tr>
    	<td><br /></td>
    </tr>
</table>
</center>
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
		$qry="select msgfrom,msg from  message where msgto='".$_SESSION['user']."'";
		$rs=mysql_query($qry);
		echo "<center>";
		echo "<table border=2 class='table table-striped'>";
		echo "<tr>
				<th><font size='+2'>Messages by :</font></th>
				<th><font size='+2'>Message :</font></th>
			 </tr>";
		
		while($ar1=mysql_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td><font size='+2' color='#fff'>".$ar1[0]."</font></td>";
			echo "<td><font size='+2' color='#fff'>".$ar1[1]."</font></td>";

			echo "</tr>";
			echo "</center>";
		}
		mysql_close($cn);
		echo "</table>";	
?>
<?php
include 'navend.php';
?>