<h1>Listado de Estudiantes</h1>
<table>
	<tr>
		<th>Identificador</th>
		<th>Nombre</th>
		<th>Apellidos</th>
	</tr>
	<?php foreach ($students as $e => $student) { ?>
		<tr>
			<td>
				<?php echo $student['Student']['id']; ?>
			</td>
			<td>
				<?php echo $student['Student']['name']; ?>
			</td>
			<td>
				<?php echo $student['Student']['lastname']; ?>
			</td>
		</tr>
	<?php } ?>
</table>