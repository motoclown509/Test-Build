<?php
/* Job Test cases generated on: 2010-11-16 10:11:52 : 1289921212*/
App::import('Model', 'Job');

class JobTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.user', 'app.vehicle');

	function startTest() {
		$this->Job =& ClassRegistry::init('Job');
	}

	function endTest() {
		unset($this->Job);
		ClassRegistry::flush();
	}

}
?>