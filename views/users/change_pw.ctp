<tr>
    <th>Change Password</th>
</tr>
<tr>
    <td>
        <?php
            // Use this section of code for the password reset functionality.
            echo $this->Form->create(array('action' => 'change_pw'));
            echo $this->Form->input('password_old', array('label' => 'Old Password', 'type' => 'password', 'autocomplete' => 'off'));
            echo $this->Form->input('password_confirm', array('label' => 'New Password', 'type' => 'password', 'autocomplete' => 'off'));
            echo $this->Form->input('password', array('label' => 'Retype new password', 'type' => 'password', 'autocomplete' => 'off'));
            echo $this->Form->end('Update Password');
        ?>
    </td>
</tr>
