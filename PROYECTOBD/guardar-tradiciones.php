<?php
	include("conect.php");
	extract($_POST);
	$sql_insertar="insert into tradiciones values ('$nombres','$fechas','$descripciones')";

	$res_sql=mysql_query($sql_insertar,$link);
	if (!$res_sql) {
		echo '<script>alert("Error de insercion...")</script>';
		echo "script>location.href='formulario-tradiciones.php'</script";
	}else{
		echo '<script>alert("Se inserto correctamente...")</script>';
		echo "script>location.href='formulario-tradiciones.php'</script";
	}
?>