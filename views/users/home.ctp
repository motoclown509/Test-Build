<h2>Home Page</h2>

<p>Welcome back <?php echo $current_user['User']['first_name'] ?>.<br> 
    <?php
        $lastLogin = date('m/d/Y', strtotime($current_user['User']['lastlogin']));
        if ($lastLogin != '12/31/1969') {
            echo 'You last logged in on '. $lastLogin;
        }
    ?>.</p>


<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="49%">
                <?php echo $this->element('my_account'); ?>
            </table>
        </td>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="49%">
                <?php  echo $this->element('my_vehicles'); ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="49%">
                <?php echo $this->element('my_jobs'); ?>
            </table>
        </td>
        <td>
            <table border="0" cellpadding="0" cellspacing="0" width="49%">
                <tr>
                    <th>My Reports</th>
                </tr>
                <tr>
                    <td>
                        Insert report links here
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
