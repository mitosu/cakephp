<h1>Listado de Estudiantes</h1>
<table>
	<tr>
		<th>Identificador</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
		<th>Acciones</th>
	</tr>
	<?php foreach ($students as $student) { ?>
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
			<td>
				<?php echo $student['Student']['phone']; ?>
			</td>
			<td>
				<?php echo $this->Html->link('Editar', array('action' => 'edit', $student['Student']['id'])); ?>
				<?php echo $this->Html->link('Borrar', array('action' => 'delete', $student['Student']['id'])); ?>
			</td>
		</tr>
	<?php } ?>
</table>