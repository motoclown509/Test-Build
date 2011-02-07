<?php
/*
*All for Web Template
*Alexander Kroker
*info@all-for-web.de
*
*/
//defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php echo $this->Html->charset(); ?>
   <title>
      <?php __('CakePHP: the rapid development php framework:'); ?>
      <?php echo $title_for_layout; ?>
   </title>
   <?php
      echo $this->Html->meta('icon');
      echo $this->Html->css('template.css');
      echo $scripts_for_layout;
   ?>
</head>
<body>
<div id="container">
   <div id="website">
      <div id="top">
         <a href="default.ctp">
            <div id="logo">
               </div>
            </a>
            <div id="user3">
               <jdoc:include type="modules" name="user3" style="none" />
               <!-- <?php //echo $this->renderElement('menus/topMenu'); ?> -->
            </div>
        </div>
        <div id="header">
         <div id="user1" class="user1">
               <jdoc:include type="modules" name="user1" style="xhtml" />
            </div>
            <div id="top_module" class="top_module">
               <jdoc:include type="modules" name="top" style="xhtml" />
            </div>
        </div>
        <div id="content_top">
        </div>
        <div id="content">
         <div id="left">
               <jdoc:include type="modules" name="left" style="rounded" />
            </div>
            <div id="component">
               <!-- <jdoc:include type="component" /> -->
               <?php echo $this->Session->flash(); ?>
               <?php echo $this->Session->flash('auth'); ?>
               <?php echo $content_for_layout; ?>
            </div>
        </div>
        <div id="content_bottom">
        </div>
        <div id="footer">
         <div id="debug">
               <jdoc:include type="modules" name="debug" style="none" />
            </div>
         <p> <a href="http://www.all-for-web.de">Webdesign</a>  by All for web</p>
        </div>
    </div>
</div>
</body>
</html>
