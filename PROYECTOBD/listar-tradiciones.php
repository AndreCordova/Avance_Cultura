<?php
	include("conect.php");
	$sql_listar="select * from tradiciones";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>Nombre</td>";
		echo "<td>Fecha de celebracion</td>";
		echo "<td>Descripcion</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['fecha']."</td>";
			echo "<td>".$row['descripcion']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>