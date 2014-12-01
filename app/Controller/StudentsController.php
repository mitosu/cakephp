<?php
	class StudentsController extends AppController{
		public $helpers = array('Html', 'Form');
		public $components = array('Session');

		public function index(){
			//Pasando parametros a las querys con arrays asociativos
			$params = array('order' => 'name asc');
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

		public function edit($id = null){
			$this->Student->id = $id;
			if($this->request->is('get')){
				/*Usamos el metodo read del modelo Student para leer
				el registro del $id que nos envian. y lo metemos
				en el request.*/
				$this->request->data = $this->Student->read();
			}else{
				if($this->Student->save($this->request->data)){
					$this->Session->setFlash('Student '. $this->request->data['Student']['name'] . ' saved');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('Error: No student saved.');
					$this->redirect(array('action' => 'index'));
				}
			}

		}

		public function delete($id = null){
			if($this->request->is('get')){
				if($this->Student->delete($id)){
					$this->Session->setFlash('Student deleted');
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('No student found for delete');
					$this->redirect(array('action' => 'index'));
				}
			}
		}
	}