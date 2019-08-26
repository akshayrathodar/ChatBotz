<?php
include 'nav.php';
?>

<center>
<table>
	<tr>
    	<td><font size="+2" color="#fff"><u><b>Msg In Group :</b></u></font></td>
    </tr>
    <tr>
    	<td><br /></td>
    </tr>
</table>
</center>
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
		$qry="select * from  comment";
		$rs=mysql_query($qry);
		echo "<center>";
		echo "<table border=2 class='table table-striped'>";
		echo "<tr>
				<th><font size='+2'>Comments</font></th>
				<th><font size='+2'>By User</font></th>
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