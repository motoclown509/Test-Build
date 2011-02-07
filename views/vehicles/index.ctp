<div class="vehicles index">
	<h2><?php __('My Vehicles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id');?></th> -->
                        <th>&nbsp;</th>
                        <!-- <th><?php echo $this->Paginator->sort('user_id');?></th> -->
			<th><?php echo $this->Paginator->sort('manufacturer_id');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th><?php echo $this->Paginator->sort('model');?></th>
			<th><?php echo $this->Paginator->sort('color');?></th>

                        <!--
                        <th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
                        -->
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vehicles as $vehicle):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

		<!-- <td><?php echo $vehicle['Vehicle']['id']; ?>&nbsp;</td> -->
                <td><?php echo $i; ?></td>
                <!--
		<td>
                    <?php echo $this->Html->link($vehicle['User']['id'], array('controller' => 'users', 'action' => 'view', $vehicle['User']['id'])); ?>
		</td>
                -->
		<td><?php echo $vehicle['Manufacturer']['name']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['year']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['model']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['color']; ?>&nbsp;</td>

                <!--
		<td><?php echo $vehicle['Vehicle']['created']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['modified']; ?>&nbsp;</td>
                -->

		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true),
                                array('action' => 'delete', $vehicle['Vehicle']['id']), null,
                                sprintf(__('Are you sure you want to delete %s?', true), $vehicle['Vehicle']['year'] .' '. $vehicle['Manufacturer']['name'] .' '. $vehicle['Vehicle']['model'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Vehicle', true), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
    </ul>
</div>
	
<!-- </div> -->

<!--
<div id="Sly-center-left">
    <div class="module_menu">
        <div>
            <div>
                <div>
                    <h3>Hauptmenü</h3>
                        <ul class="menu">
                            <li id="current" class="active item1"><a href="http://www.joomlademos.de/"><span>Startseite</span></a></li>
                            <li class="parent item27"><a href="/joomla-overview.html"><span>Joomla! Überblick</span></a></li>
                            <li class="item2"><a href="/joomla-lizenz.html"><span>Joomla!-Lizenz</span></a></li>
                            <li class="item37"><a href="/more-about-joomla.html"><span>Mehr über Joomla!</span></a></li>
                            <li class="item41"><a href="/faq.html"><span>FAQ</span></a></li>
                            <li class="item50"><a href="/neuigkeiten.html"><span>Neuigkeiten</span></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
-->