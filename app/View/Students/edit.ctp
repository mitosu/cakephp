<h1>Edit Student</h1>
<?php
	echo $this->Form->create('Student', array('action' => 'edit'));
	echo $this->Form->input('name', array('label' => 'Editar nombre'));
	echo $this->Form->input('lastname', array('label' => 'Editar apellido'));
	echo $this->Form->input('phone', array('label' => 'Editar teléfono'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save changes');

?>