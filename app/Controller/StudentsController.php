<?php
	class StudentsController extends AppController{
		public $helpers = array('Html', 'Form');
		public $components = array('Session');

		public function index(){
			//Pasando parametros a las querys con arrays asociativos
			$params = array('order' => 'name desc');
			$this->Set('students', $this->Student->find('all', $params));
		}

		public function add(){
			if ($this->request->is('post')) {
				if ($this->Student->save($this->request->data)) {
					$this->Session->setFlash('Student saved');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
	}