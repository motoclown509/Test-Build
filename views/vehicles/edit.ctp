<div class="vehicles form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
 		<legend><?php __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('manufacturer_id');
		echo $this->Form->input('year');
		echo $this->Form->input('model');
		echo $this->Form->input('color');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>