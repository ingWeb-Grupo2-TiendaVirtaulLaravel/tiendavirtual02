<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=reporte.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM articulos";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:#b9c9fe;">
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Precio</th>
		<th>Marca</th>
		<th>Categoria</th>
		<th>Stock</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['precio']; ?></td>
					<td><?php echo $row['codMarca']; ?></td>
					<td><?php echo $row['codCategoria']; ?></td>
					<td><?php echo $row['stock']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>