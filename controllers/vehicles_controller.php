<?php
class VehiclesController extends AppController {

	var $name = 'Vehicles';

	function index() {
		$this->Vehicle->recursive = 0;
		$this->set('vehicles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vehicle', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vehicle', $this->Vehicle->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vehicle->create();
			if ($this->Vehicle->save($this->data)) {
				$this->Session->setFlash(__('The vehicle has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Vehicle->User->find('list');
		$manufacturers = $this->Vehicle->Manufacturer->find('list');
		$this->set(compact('users', 'manufacturers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid vehicle', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vehicle->save($this->data)) {
				$this->Session->setFlash(__('The vehicle has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vehicle->read(null, $id);
		}
		$users = $this->Vehicle->User->find('list');
		$manufacturers = $this->Vehicle->Manufacturer->find('list');
		$this->set(compact('users', 'manufacturers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for vehicle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vehicle->delete($id)) {
			$this->Session->setFlash(__('Vehicle deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vehicle was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function myRides() {
            return $this->Vehicle->find('all', array('conditons' => array('Vehicle.user_id' => '$id')));           
        }

        function listVehicles() {
            $tmp = $this->Vehicle->find('all', array('conditons' => array('Vehicle.user_id' => '$id')));
            $result = Set::combine($tmp, '{n}.Vehicle.id', array('{0} {1} ({2})', '{n}.Vehicle.year', '{n}.Vehicle.model', '{n}.Vehicle.color'));
            return $result;
        }
       
}
?>