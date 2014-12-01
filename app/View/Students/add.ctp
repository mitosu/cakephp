<h1>Agregar Estudiantes</h1>

<?php
	echo $this->Form->create('Student', array('action' => 'add'));
	echo $this->Form->input('name', array('label' => 'Nombre'));
	echo $this->Form->input('lastname', array('label' => 'Apellidos'));
	echo $this->Form->input('phone', array('label' => 'Teléfono'));
	echo $this->Form->end('Save student');
?>