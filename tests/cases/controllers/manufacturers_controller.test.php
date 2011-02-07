<?php
/* Manufacturers Test cases generated on: 2010-11-16 10:11:56 : 1289921216*/
App::import('Controller', 'Manufacturers');

class TestManufacturersController extends ManufacturersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ManufacturersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.vehicle');

	function startTest() {
		$this->Manufacturers =& new TestManufacturersController();
		$this->Manufacturers->constructClasses();
	}

	function endTest() {
		unset($this->Manufacturers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>