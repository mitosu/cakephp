<h1>Listado de Estudiantes</h1>
<?php echo $this->Html->link('Agregar estudiante', array('action' => 'add')); ?>
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
				<?php echo $this->Form->postLink('Borrar', array('action' => 'delete', $student['Student']['id']),
				array('confirm' => '¿Are you sure delete to ' . $student['Student']['name'] . '?')); ?>
			</td>
		</tr>
	<?php } ?>
</table>