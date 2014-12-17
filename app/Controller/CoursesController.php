<?php
	class CoursesController extends AppController{
		public function index(){
			/*Aquí le digo cuantos niveles leer de una tabla recursiva.
			Como es una tabla simple, le digo que solo lea el primer
			nivel.*/
			$this->Course->recursive = 0;
			/*Con esto activo la paginación nativa de cake*/
			$this->set('courses', $this->paginate());
		}

		public function alta(){
			if($this->request->is('post')){
				if($this->Course->save($this->request->data)){
					$this->Session->setFlash('The course is saved');
					$this->redirect(array('action' => 'index'));
				}
			}
			$teachers = $this->Course->Teacher->find('list');
		}
	}
?>