<?php
/* Jobs Test cases generated on: 2010-11-16 10:11:52 : 1289921212*/
App::import('Controller', 'Jobs');

class TestJobsController extends JobsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.user', 'app.vehicle');

	function startTest() {
		$this->Jobs =& new TestJobsController();
		$this->Jobs->constructClasses();
	}

	function endTest() {
		unset($this->Jobs);
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