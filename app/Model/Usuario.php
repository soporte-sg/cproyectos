<?php

App::uses('AppModel', 'Model');

/**
 * Usuario Model
 *
 * @property Nivel $Nivel
 */
class Usuario extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombres';

    /**
     * Validation rules
     *
     * @var array
     */
            

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */

    
  public $belongsTo = array(
        'Role' => array(
            'className' => 'Role',
            'foreignKey' => 'role_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
        'Tarea' => array(
            'className' => 'Tarea',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );


}
