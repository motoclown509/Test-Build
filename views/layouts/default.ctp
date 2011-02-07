<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php echo $this->Html->charset(); ?>
   <title>
      <?php __('Bike Logs: Keep track of your work:'); ?>
      <?php echo $title_for_layout; ?>
   </title>
   <?php
      echo $this->Html->meta('icon');
      //echo $this->Html->css('cake.generic');
      echo $this->Html->css('cake.test');
      echo $scripts_for_layout;
   ?>
</head>
<body>
    <div id="header">
        <h1><?php //echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
    </div>
    <div id="container">
        <div id="left_col">
            <div id="actions">
                <h3><?php __('Login'); ?></h3>
                < Login box will go here >
            </div>
        </div>
        <div id="content">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $content_for_layout; ?>
        </div>
        <div style="clear: both"></div>
    </div>
    <div id="footer">
        <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
            'http://www.cakephp.org/',
               array('target' => '_blank', 'escape' => false)
            );
        ?>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>