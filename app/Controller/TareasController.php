<?php
App::uses('AppController', 'Controller');
/**
 * Tareas Controller
 *
 * @property Tarea $Tarea
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TareasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tarea->recursive = 0;
		$this->set('tareas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}

		$user = $this->Session->read('Usuario');
        $rol=$user['Usuario']['role_id'];
        $logros=$this->Tarea->Logro->find('list');
        //debug($logros);
		$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
		$this->set('tarea', $this->Tarea->find('first', $options));
		$this->set(compact('rol'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($obj_id=null) {
		if ($this->request->is('post')) {
			$this->Tarea->create();
			if ($this->Tarea->save($this->request->data)) {
				$this->Session->setFlash(__('la tarea ha sido guardada.'));
				return $this->redirect(array('controller'=>'objetivos','action' => 'view'.'/'.$obj_id));
			} else {
				$this->Session->setFlash(__('no pudo ser guardada'));
			}
		}
		$objetivos = $this->Tarea->Objetivo->find('list', array('conditions'=>array('Objetivo.id'=>$obj_id)));
		$usuarios = $this->Tarea->Usuario->find('list');
		$estados = $this->Tarea->Estado->find('list');
		$this->set(compact('objetivos', 'usuarios', 'estados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarea->save($this->request->data)) {
				$this->Session->setFlash(__('la tarea ha sido guardada.'));
				return $this->redirect(array('controller'=>'objetivos','action' => 'view'.'/5'));
			//	return $this->redirect(array('controller'=>'tareas','action' => 'view'.'/'.$tarea_id));
			} else {
				$this->Session->setFlash(__('la tarea no pudo ser guardada'));
			}
		} else {
			$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
			$this->request->data = $this->Tarea->find('first', $options);
		}
		$objetivos = $this->Tarea->Objetivo->find('list');
		$usuarios = $this->Tarea->Usuario->find('list');
		$estados = $this->Tarea->Estado->find('list');
		$this->set(compact('objetivos', 'usuarios', 'estados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tarea->id = $id;
		if (!$this->Tarea->exists()) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		// $this->request->allowMethod('post', 'delete');
		if ($this->Tarea->delete()) {
			$this->Session->setFlash(__('la tarea ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('la tarea no pudo ser eliminada'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
