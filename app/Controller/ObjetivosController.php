<?php
App::uses('AppController', 'Controller');
/**
 * Objetivos Controller
 *
 * @property Objetivo $Objetivo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ObjetivosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
public function beforeFilter() {
        parent::beforeFilter();
        // $this->Security->unlockedActions = array('add','edit','delete');
        $this->loadModel('Tarea');
        $this->loadModel('Logro');
        $this->loadModel('Estado');
        $this->loadModel('Objetivo');
        $usuario = $this->Session->read("user");
        $rol_usuario = $usuario['role_id'];
        $this->set(compact('rol_usuario'));
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Objetivo->recursive = 0;
		$user = $this->Session->read('Usuario');
        $rol=$user['Usuario']['role_id'];
        $this->set(compact('rol'));
		$this->set('objetivos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Objetivo->exists($id)) {
			throw new NotFoundException(__('Invalid objetivo'));
		}
		$user = $this->Session->read('Usuario');
        $rol=$user['Usuario']['role_id'];

		$options = array('conditions' => array('Objetivo.' . $this->Objetivo->primaryKey => $id));
		$logros=$this->Logro->find('all');
	//	debug($logros);
		$this->set('objetivo', $this->Objetivo->find('first', $options));
		$this->set(compact('rol','id','logros'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
		if ($this->request->is('post')) {
			$this->Objetivo->create();
			if ($this->Objetivo->save($this->request->data)) {
				$this->Session->setFlash(__('El objetivo fue guardado.'));
				return $this->redirect(array('controller'=>'proyectos','action' => 'view/'.$id));
			} else {
				$this->Session->setFlash(__('El objetivo no pudo ser guardado.'));
			}
		}
		$proyectos = $this->Objetivo->Proyecto->find('list');
		$this->set(compact('proyectos','id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Objetivo->exists($id)) {
			throw new NotFoundException(__('Invalid objetivo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Objetivo->save($this->request->data)) {
				$this->Session->setFlash(__('El objetivo fue guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El objetivo no pudo ser guardado.'));
			}
		} else {
			$options = array('conditions' => array('Objetivo.' . $this->Objetivo->primaryKey => $id));
			$this->request->data = $this->Objetivo->find('first', $options);
		}
		$proyectos = $this->Objetivo->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Objetivo->id = $id;
		if (!$this->Objetivo->exists()) {
			throw new NotFoundException(__('Invalid objetivo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Objetivo->delete()) {
			$this->Session->setFlash(__('El objetivo ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El objetivo no fue eliminado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
