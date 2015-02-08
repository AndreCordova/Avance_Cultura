<?php
	include("conect.php");
	$sql_listar="select * from etnias";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Nombre</td>";
		echo "<td>Numero de habitantes</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['habitantes']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>