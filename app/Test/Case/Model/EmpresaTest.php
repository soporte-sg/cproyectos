<?php
App::uses('Empresa', 'Model');

/**
 * Empresa Test Case
 */
class EmpresaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empresa',
		'app.usuario',
		'app.auditoria',
		'app.auditorias_normageneral',
		'app.normageneral',
		'app.subnorma',
		'app.atributossubnorma',
		'app.subnormaindex'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Empresa = ClassRegistry::init('Empresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empresa);

		parent::tearDown();
	}

}
