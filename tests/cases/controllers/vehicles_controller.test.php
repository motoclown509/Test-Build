<?php
/* Vehicles Test cases generated on: 2010-11-16 10:11:06 : 1289921226*/
App::import('Controller', 'Vehicles');

class TestVehiclesController extends VehiclesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VehiclesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.user', 'app.job', 'app.manufacturer');

	function startTest() {
		$this->Vehicles =& new TestVehiclesController();
		$this->Vehicles->constructClasses();
	}

	function endTest() {
		unset($this->Vehicles);
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