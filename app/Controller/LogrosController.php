<?php
App::uses('AppController', 'Controller');
App::uses('MeioUploadBehavior', 'Model');
/**
 * Logros Controller
 *
 * @property Logro $Logro
 * @property PaginatorComponent $Paginator
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class LogrosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Security', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Logro->recursive = 0;
		$this->set('logros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Logro->exists($id)) {
			throw new NotFoundException(__('Invalid logro'));
		}
		$options = array('conditions' => array('Logro.' . $this->Logro->primaryKey => $id));
		$this->set('logro', $this->Logro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($tarea_id) {
		if ($this->request->is('post')) {
			$this->Logro->create();
			if ($this->Logro->save($this->request->data)) {
				$this->Session->setFlash(__('El logro fue guardado.'));
				return $this->redirect(array('controller'=>'tareas','action' => 'view'.'/'.$tarea_id));
			} else {
				$this->Session->setFlash(__('El logrono pudo ser guardado.'));
			}
		}
		$tareas = $this->Logro->Tarea->find('list',array('conditions'=>array('Tarea.id'=>$tarea_id)));
		$this->set(compact('tareas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Logro->exists($id)) {
			throw new NotFoundException(__('Invalid logro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Logro->save($this->request->data)) {
				$this->Session->setFlash(__('El logro fue guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El logro no pudo ser guardado.'));
			}
		} else {
			$options = array('conditions' => array('Logro.' . $this->Logro->primaryKey => $id));
			$this->request->data = $this->Logro->find('first', $options);
		}
		$tareas = $this->Logro->Tarea->find('list');
		$this->set(compact('tareas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Logro->id = $id;
		if (!$this->Logro->exists()) {
			throw new NotFoundException(__('Invalid logro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Logro->delete()) {
			$this->Session->setFlash(__('El logro fue eliminado.'));
		} else {
			$this->Session->setFlash(__('El logro no pudo ser eliminado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
