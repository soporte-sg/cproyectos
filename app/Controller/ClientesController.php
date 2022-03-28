<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class ClientesController extends AppController {

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
		$user = $this->Session->read('Usuario');
		//debug($user);
		$rol=$user['Usuario']['role_id'];
        $this->Cliente->recursive = 0;
		$this->set('clientes', $this->Paginator->paginate());
		$this->set(compact('rol'));
	}
	public function informe($id) {
		$user = $this->Session->read('Usuario');
		$cliente=$this->Cliente->find('all',array('conditions'=>array('Cliente.id'=>$id)));
	//	debug ($cliente);
		//$eps = $this->Eps->find('all',array('conditions'=>array('Eps.tipo_administradora'=>'EPS')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$user = $this->Session->read('Usuario');
        $rol=$user['Usuario']['role_id'];
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
		$this->set(compact('rol'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('El cliente ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no pudo ser guardado.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('El cliente ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no pudo ser guardado.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('El cliente ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El cliente no pudo ser eliminado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
