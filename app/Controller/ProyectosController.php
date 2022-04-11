<?php
App::uses('AppController', 'Controller');
/**
 * Proyectos Controller
 *
 * @property Proyecto $Proyecto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProyectosController extends AppController {

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
		$user = $this->Session->read('Usuario');
        $rol  = $user['Usuario']['role_id'];
        $this->Proyecto->recursive = 0;
        $this->paginate = array(
        'limit' => 4,
        'order' => array('id' => 'desc')
    );
		$this->set('proyectos', $this->Paginator->paginate());
		$this->set(compact('rol'));
	}
public function informe($id_proyecto){
    $this->layout='info';
    $objetivo=$this->Objetivo->find('all',array('conditions'=>array('Objetivo.proyecto_id'=>$id_proyecto)));
   
   $id_obj=$objetivo[0]['Objetivo']['id'];
   $tareas=$this->Tarea->find('all');
   
   
   $total_obj=$this->Objetivo->find('count',array('conditions'=>array('Objetivo.proyecto_id'=>$id_proyecto)));
   $o=0;$t=0;
   foreach($objetivo as $objetivos ){
   $total_tarea=$this->Tarea->find('all',array('conditions'=>array('Tarea.objetivo_id'=>$objetivos['Objetivo']['id'])));
   foreach($total_tarea as $tarea_){
      $tar[] =$tarea_['Tarea']['id'];
       
   }
   
   
   }
   $totalTareas=count($tar);
   $logrosTotal=$logros=$this->Logro->find('count',array('conditions'=>array('Logro.tarea_id IN' => $tar)));
   $logrosSin=$logros=$this->Logro->find('count',array('conditions'=>array('Logro.tarea_id IN' => $tar,'Logro.dir'=>' ')));
   
   $logros=$this->Logro->find('all');
   $this->set(compact('id_proyecto','objetivo','tareas','logros','total_obj','totalTareas','logrosSin','logrosTotal'));
}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$user = $this->Session->read('Usuario');
        $rol  = $user['Usuario']['role_id'];
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		//debug($options);
		$objetivo=$this->Tarea->Objetivo->find('all',array('conditions'=>array('Proyecto.id'=>$id)));
		
		//$tarea=$this->Tarea->Logro->find('all',array('conditions'=>array('Logro.tarea_id'=>$id)));
		
		//debug($objetivo);
		$this->set('proyecto', $this->Proyecto->find('first', $options));
		$this->set(compact('rol','id'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($cliente_id) {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('El proyecto fue guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no pudo ser guardado.'));
			}
		}
		$clientes = $this->Proyecto->Cliente->find('list', array('conditions'=>array('Cliente.id'=>$cliente_id)));
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('El proyecto fue guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no pudo ser guardado.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
		$clientes = $this->Proyecto->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('The proyecto fue eliminado.'));
		} else {
			$this->Session->setFlash(__('The proyecto no pudo ser eliminado.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
