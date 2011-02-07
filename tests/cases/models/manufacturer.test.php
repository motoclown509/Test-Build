<?php
/* Manufacturer Test cases generated on: 2010-11-16 10:11:55 : 1289921215*/
App::import('Model', 'Manufacturer');

class ManufacturerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.vehicle');

	function startTest() {
		$this->Manufacturer =& ClassRegistry::init('Manufacturer');
	}

	function endTest() {
		unset($this->Manufacturer);
		ClassRegistry::flush();
	}

}
?>