<?php
App::uses('AppController', 'Controller');

class TablasController extends AppController {
	var $name = 'Tablas';

    public $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	
	function beforeFilter(){
		parent::beforeFilter();
	}

	
	public function index() {
    } 

	public function r_x_curso() {

	}

}
?>