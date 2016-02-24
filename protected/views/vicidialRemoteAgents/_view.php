<?php
/* @var $this VicidialRemoteAgentsController */
/* @var $data VicidialRemoteAgents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('remote_agent_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->remote_agent_id), array('view', 'id'=>$data->remote_agent_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_start')); ?>:</b>
	<?php echo CHtml::encode($data->user_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_lines')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_lines); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('server_ip')); ?>:</b>
	<?php echo CHtml::encode($data->server_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_exten')); ?>:</b>
	<?php echo CHtml::encode($data->conf_exten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campaign_id')); ?>:</b>
	<?php echo CHtml::encode($data->campaign_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('closer_campaigns')); ?>:</b>
	<?php echo CHtml::encode($data->closer_campaigns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension_group')); ?>:</b>
	<?php echo CHtml::encode($data->extension_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension_group_order')); ?>:</b>
	<?php echo CHtml::encode($data->extension_group_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('on_hook_agent')); ?>:</b>
	<?php echo CHtml::encode($data->on_hook_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('on_hook_ring_time')); ?>:</b>
	<?php echo CHtml::encode($data->on_hook_ring_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('included')); ?>:</b>
	<?php echo CHtml::encode($data->included); ?>
	<br />

	*/ ?>

</div>