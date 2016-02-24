<?php 

/* @var $this SiteController */
/* @var $data VicidialServerCarriers */
?>


<?php if ($data->getCampaignId() != "REMINDER"): ?>

<div class="span3">
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>$data->api_username,
	));
?>
	<table>
		<tr>
			<td>
				<b>Viciuser : </b>
			</td>
			<td>
				<?php echo CHtml::encode($data->getViciUser()); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Number of lines : </b>
			</td>
			<td>
				<?php echo CHtml::encode($data->getNumberOfLines()); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Server IP : </b>
			</td>
			<td>
				<?php echo CHtml::encode($data->getServerIp() ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Status : </b>
			</td>
			<td>
				<?php echo CHtml::encode($data->getStatus() ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('carrier_name')); ?>:</b>
			</td>
			<td>
				<?php echo CHtml::encode($data->carrier_name); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('api_mainpass')); ?>:</b>
			</td>
			<td>
				<?php echo CHtml::encode($data->api_mainpass); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('api_username')); ?>:</b>
			</td>
			<td>
				<?php echo CHtml::encode($data->api_username); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('api_password')); ?>:</b>
			</td>
			<td>
				<?php echo CHtml::encode($data->api_password); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Campaign ID : </b>
			</td>
			<td>
				<?php echo CHtml::encode($data->getCampaignId() ); ?>
			</td>
		</tr>
	</table>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('account_entry')); ?>:</b>
	<?php echo CHtml::encode($data->account_entry); ?>
	<br />


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
	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_string')); ?>:</b>
	<?php echo CHtml::encode($data->registration_string); ?>
	<br />


	*/ ?>
<?php
	$this->endWidget();
?>


</div>
<?php endif ?>