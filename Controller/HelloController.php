<?php

class HelloController extends AppController {
	var $name = 'Hello';
	//var $autoRender = false;
	/* var $uses = array();
	var $autoRender = false;
	
	function index(){
		//echo 'Hellow World';
		$this->set('hello','Hello World');
	} */
	
	//var $uses = array( 'grades');

	function index(){
		$this->loadModel('grades');
		$this->set('grades',$this->grades->find('all'));
	}
}

?>