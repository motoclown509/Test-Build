<div class="users form">
<?php echo $this->Form->create(array('action' => 'register'));?>
	<fieldset>
 		<legend><?php __('New User Registration'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password_confirm', array('label' => 'Password', 'type' => 'password'));
                echo $this->Form->input('password', array('label' => 'Password Confirm'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<!-- Insert the <div class="actions"> code from the add.ctp file here if there's an error.  -->

