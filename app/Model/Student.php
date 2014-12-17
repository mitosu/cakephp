<?php
//Tabla en plural y en minúsculas.
//Clase en singular y en camelcase.
	class Student extends AppModel{
		/*Aqui vamos a realizar la validación de los campos de un
		formulario. Como aquí esta la comunicación con los datos
		es aquí donde pondremos la logica de validar los datos.*/

		/*Aquí vamos a crear una variable publica llamada validate
		con las reglas de validación para cada campo. crearemos un
		array asosiativo con el nombre de input + un array asosiativo
		el tipo de action en ese caso será 'rule' más el tipo de rule.*/

		/*Se debe poner más de una regla para que aparezca el menssage*/
		public $validate = array(
			'name' => array('rule' => 'notEmpty',
							'rule' => 'isUnique',
							'message' => 'El nombre de usuario ya existe'),
			'lastname' => array('rule' => 'notEmpty'),
			'phone' => array('rule' => 'numeric',
							'message' => 'Por favor escriba solo números')
		);

		/*Asociaciones entre tablas a nivel de modelo. Así es como se debe relacionar en cakephp
		siempre debe hacerse esta relacion a nivel de modelo.*/

	}