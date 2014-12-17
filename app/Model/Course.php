<?php
	class Course extends AppModel{
		public $displayField = 'name';
		public $belongsTo = array(
				'Teacher' => array(
						'className' => 'Teacher',
						'foreignkey' => 'teacher_id'
					)
			);
	}
?>