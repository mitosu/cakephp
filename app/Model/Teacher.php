<?php
	class Teacher extends AppModel{
		/*Si en la base de datos este campo se llama name,
		cakephp me lo reconocerá automaticamente, si tiene
		otro nombre, debo espicificarlo aquí obligatoriamente.*/
		public $displayField = 'name';
		/*Ahora debemos especificar el tipo de relación (asociaciones) Relation Types en book*/
		public $hasMany = array(
			//Relación de cursos.
				'Course' => array(
						'className' => 'Course',//Es la clase que va a estar relacionada en esta asociación. El nombre de la clase que va a relacionar es este.
						'foreignKey' => 'teacher_id',
						'dependent' => true
					),
			);
	}

?>