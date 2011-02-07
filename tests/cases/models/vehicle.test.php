<?php
/* Vehicle Test cases generated on: 2010-11-16 10:11:05 : 1289921225*/
App::import('Model', 'Vehicle');

class VehicleTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.user', 'app.job', 'app.manufacturer');

	function startTest() {
		$this->Vehicle =& ClassRegistry::init('Vehicle');
	}

	function endTest() {
		unset($this->Vehicle);
		ClassRegistry::flush();
	}

}
?>