<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar fiestas populares</h1>
	<section>
		<form name="fiestas_populares" action="guardar-fiestas.php" method="post">
			<input type="text" name="nombres" placeholder="Nombre" required><br>
			<input type="text" name="fechas" placeholder="Fecha de celebracion"><br>
			<input type="text" name="descripciones" placeholder="Descripcion" required><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html