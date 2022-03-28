<?php
App::uses('AppModel', 'Model');
/**
 * Logro Model
 *
 * @property Tarea $Tarea
 */
class Logro extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


var $actsAs = array(
        'MeioUpload' => array('filename'),
        
        
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tarea' => array(
			'className' => 'Tarea',
			'foreignKey' => 'tarea_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
