<?php
/* @var $this VicidialServerCarriersController */
/* @var $data VicidialServerCarriers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrier_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->carrier_id), array('view', 'id'=>$data->carrier_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrier_name')); ?>:</b>
	<?php echo CHtml::encode($data->carrier_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_string')); ?>:</b>
	<?php echo CHtml::encode($data->registration_string); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_id')); ?>:</b>
	<?php echo CHtml::encode($data->template_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_entry')); ?>:</b>
	<?php echo CHtml::encode($data->account_entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('protocol')); ?>:</b>
	<?php echo CHtml::encode($data->protocol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('globals_string')); ?>:</b>
	<?php echo CHtml::encode($data->globals_string); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dialplan_entry')); ?>:</b>
	<?php echo CHtml::encode($data->dialplan_entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('server_ip')); ?>:</b>
	<?php echo CHtml::encode($data->server_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrier_description')); ?>:</b>
	<?php echo CHtml::encode($data->carrier_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_group')); ?>:</b>
	<?php echo CHtml::encode($data->user_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('api_username')); ?>:</b>
	<?php echo CHtml::encode($data->api_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('api_password')); ?>:</b>
	<?php echo CHtml::encode($data->api_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('api_mainpass')); ?>:</b>
	<?php echo CHtml::encode($data->api_mainpass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remote_user')); ?>:</b>
	<?php echo CHtml::encode($data->remote_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('api_balance')); ?>:</b>
	<?php echo CHtml::encode($data->api_balance); ?>
	<br />

	*/ ?>

</div>