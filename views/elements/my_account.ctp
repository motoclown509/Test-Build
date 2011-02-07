<div class="actions">
    <h3>My Account</h3>
    <ul>
        <li><?php echo $this->Html->link(__('Change Password', true), array('controller' => 'users', 'action' => 'change_pw')); ?></li>
        <li><?php echo $this->Html->link(__('Edit Personal Info', true), array('controller' => 'users', 'action' => 'edit', $current_user['User']['id'])); ?></li>
    </ul>
</div>