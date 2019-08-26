<?php
include 'nav.php';
?>

<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
		$qry="select Username from  register";
		$rs=mysql_query($qry);
		echo "<center>";
		echo "<table border=2 class='table table-striped'>";
		echo "<tr>
				
				<th><font size='+2'>Users Avalible :</font></th>
			 </tr>";
		
		while($ar1=mysql_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td><a href='messageuser.php?param=".$ar1[0]."'><font size='+2' color='#fff'>".$ar1[0]."</font><i class='fa fa-comments-o' style='font-size:25px;color:white;float:right;'></i></a></td>";
			
			echo "</tr>";
			echo "</center>";
		}
		mysql_close($cn);
		echo "</table>";	
?>
<?php
include 'navend.php';
?>