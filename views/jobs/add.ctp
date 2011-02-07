<div class="jobs form">
<?php echo $this->Form->create('Job');?>
	<fieldset>
 		<legend><?php __('Add Job'); ?></legend>
	<?php
                $form->input('Jobs', array('value' => 'user_id', 'type' => 'hidden'));
                $vehList = $this->requestAction(array('controller' => 'vehicles', 'action' => 'listVehicles'));
                echo $this->Form->input('vehicle_id', array('options' => $vehList, 'label' => 'Choose a vehicle'));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('hours');
		echo $this->Form->input('miles');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>