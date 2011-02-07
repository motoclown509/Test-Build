<?php
/* Vehicle Fixture generated on: 2010-11-16 10:11:05 : 1289921225 */
class VehicleFixture extends CakeTestFixture {
	var $name = 'Vehicle';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'manufacturer_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'year' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'color' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4ce2a2c9-c560-4daa-9a6a-1158cfb0e34c',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'manufacturer_id' => 'Lorem ipsum dolor sit amet',
			'year' => 1,
			'model' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'created' => '1289921225',
			'modified' => '1289921225'
		),
	);
}
?>